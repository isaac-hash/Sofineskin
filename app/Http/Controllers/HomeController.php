<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Session;

use Stripe;

class HomeController extends Controller
{
    //welcome page function (Index Page)
    public function Index()
    {
        return view('frontend.index');
    }

    //Product_detail
    public function Product_detail($id)
    {

        $product = Products::findOrFail($id);

        return view('frontend.pages.product_detail', compact('product'));
    }

    //Add  To Cart Function
    public function add_cart(Request $request, $id)
    {
        $cart = new Cart();

        $product = Products::find($id);
        $user = Auth::user();

        $userid = $user->id;

        $product_exist_in_cart = Cart::where('product_id', '=', $id)->where('user_id', '=', $userid)->get('id')->first();

        if ($product_exist_in_cart) {

            $cart = Cart::find($product_exist_in_cart)->first();

            $cart->name = $user->fname;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->quantity = $request->quantity;


            $cart->price = $product->price * $cart->quantity;


            $cart->save();

            return redirect()->back();
        } else {

            $cart->name = $user->fname;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->title;

            $cart->price = $product->price * $request->quantity;

            // dd($product->price * $request->quantity);

            $cart->single_price = $product->price;

            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->quantity = $request->quantity;


            $cart->save();

            Alert::success('Product Added Successfully', 'Your product have been added to the cart');

            return redirect()->back();
        }
    }

    //view cart
    public function View_cart()
    {
        $datas = cart::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();

        $counter = cart::where('user_id', '=', Auth::user()->id)->count();

        return view('frontend.pages.view_cart', compact('datas', 'counter'));
    }

    //Order_history
    public function Order_history()
    {
        $datas = Order::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();

        $counter = Order::where('user_id', '=', Auth::user()->id)->count();

        return view('frontend.pages.order-history', compact('datas', 'counter'));
    }

    //Filter
    public function Filter($id)
    {

        $category_name = $id;

        $datas = Products::where('category', '=', $category_name)->orderBy('id', 'desc')->paginate(1);

        $num = Products::where('category', '=', $category_name)->orderBy('id', 'desc')->count();

        return view('frontend.pages.filter', compact('datas', 'category_name', 'num'));
    }

    //Search
    public function Search(Request $request)
    {

        $searchedWord = $request->search_form;

        $datas = Products::where('title', 'LIKE', "%$searchedWord%")->orWhere('category', 'LIKE', "%$searchedWord%")->orWhere('description', 'LIKE', "%$searchedWord%")->orWhere('sub_title', 'LIKE', "%$searchedWord%")->orderBy('id', 'desc')->get();

        $num = Products::where('title', 'LIKE', "%$searchedWord%")->orWhere('category', 'LIKE', "%$searchedWord%")->orWhere('description', 'LIKE', "%$searchedWord%")->orWhere('sub_title', 'LIKE', "%$searchedWord%")->count();

        return view('frontend.pages.search', compact('datas', 'searchedWord', 'num'));
    }

    // remove from cart
    public function Remove_cart($id)
    {

        $cart = Cart::find($id);

        $cart->delete();
        Alert::success('Great', 'Product was removed From Cart successfully');
        return redirect()->back()->with('message', 'Cart was removed successfully');
    }

    // Add cart
    public function increase_cart($id)
    {

        $cart = Cart::find($id);

        $cart->quantity = $cart->quantity += 1;

        $cart->price = $cart->price += $cart->single_price;

        $cart->save();

        return redirect()->back();
    }

    // Minus from cart
    public function minus_cart($id)
    {
        $cart = Cart::find($id);

        if ($cart->quantity < 2) {
            return redirect()->back();
        } else {


            $cart->quantity = $cart->quantity -= 1;

            $cart->price = $cart->price -= $cart->single_price;

            $cart->save();

            return redirect()->back();
        }
    }

    //Stripe
    public function Proceed($totalPrice)
    {

        $user = User::find(Auth::user()->id)->first();

        $user->amount = $totalPrice;

        $user->save();

        return redirect()->route('payment', $totalPrice);
    }

    //Stripe payment page
    public function Payment(Request $request)
    {
        return view('frontend.pages.payment');
    }

    //Verify payment
    public function VerifyPayment(Request $request, $user_id)
    {
        $id = $request->transaction_id;

        //verify

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/$id/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "Authorization: Bearer " . env("FW_S_K")
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $result = json_decode($response);

        if ($err) {
            $notification = session()->flash("error", $err);
            return redirect()->back()->with($notification);
            Alert::error("error", $err);
        }

        if ($result->status == "success") {


            $datas = Cart::where('user_id', '=', $user_id)->get();

            foreach ($datas as $key => $data) {

                $order = new Order();

                $order->name = $data->name;
                $order->email = $data->email;
                $order->phone = $data->phone;
                $order->address = $data->address;
                $order->user_id = $data->user_id;

                $order->product_title = $data->product_title;
                $order->price = $data->price;
                $order->image = $data->image;
                $order->product_id = $data->id;
                $order->quantity = $data->quantity;

                $order->delivery_status = "Processing";
                $order->payment_status = "Paid";
                // $order->trackingId = "TR". rand("123456789", "098765432");


                $order->save();

                $cart = Cart::find($data->id);
                $cart->delete();
            }

            $data = new Payment();

            $data->amount = $result->data->amount;
            $data->currency = $result->data->currency;
            $data->app_fee = $result->data->app_fee;
            $data->payment_type = $result->data->payment_type;
            $data->amount_settled = $result->data->amount_settled;
            $data->ref = $result->data->flw_ref;
            $data->today = Carbon::now()->format('d F Y');
            $data->status = $result->data->status;
            $data->any1 = $user_id;

            

            $user = User::find($user_id);
            $user->amount = 0;
            $user->save();


            $data->save();


            // $notification = session()->flash("success", "Payment was successful, goto admin dashboard to download receipt");
            Alert::success('Great', 'Payment was successful');
            return redirect()->route('paymentSuccess');
        } elseif ($result->status == "cancelled") {
            // $notification = session()->flash("error", "Payment was not successful");
            Alert::error('opps','Payment was not successful');
            return redirect()->route('view-cat');
        }
    }

    //Payment Success page
    public function PaymentSuccess()
    {
        return view('frontend.pages.paymentsuccess');
    }
}

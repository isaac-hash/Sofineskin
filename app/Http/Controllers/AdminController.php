<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\utilities;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $allProducts = Products::all()->count();

        $allUsers = User::where('usertype', '=', '0')->count();

        $allorders = Order::all()->count();

        $order = Order::all();
        $totalIncome = '0';
        foreach ($order as $order) {
            $totalIncome += $order->price;
        }

        $odersDeliverd = Order::where('delivery_status', '=', 'Delivered')->get()->count();

        $odersNotDeliverd = Order::where('delivery_status', '=', 'Processing')->get()->count();

        return view('backend.index', compact('allProducts', 'allUsers', 'allorders', 'totalIncome', 'odersDeliverd', 'odersNotDeliverd'));
    }

    //all categories
    public function Categories()
    {
        $data = Category::orderBy('id', 'desc')->get();
        return view('backend.category.all_category', compact('data'));
    }

    //Add Category page
    public function AddCategories()
    {
        return view('backend.category.add_category');
    }

    public function Store_category(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $data = new Category();
        $data->category_name = $request->category_name;

        if ($request->image) {
            $imageName = time() . '_image_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/frontend/uploads', $imageName);

            $data->image = $imageName;
        } else {
            $data->image = 'default.jpg';
        }

        $data->save();
        Alert::success('Good', 'Category added successfully');
        return redirect()->route('categories')->with('message', 'Category added successfully');
    }


    //Delete Category
    public function Delete_category($id)
    {

        $category = Category::findOrFail($id);

        $category->delete();
        Alert::success('Good', 'Category Deleted Successfully.');
        return redirect()->route('categories')->with('success', 'Category Deleted Successfully.');
    }

    //Update_category
    public function Update_category($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.update_category', compact('category'));
    }

    //Update__category
    public function Update__category(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::findOrFail($id);

        $category->category_name = $request->category_name;

        if ($request->image) {

            $imageName = time() . '_image_' . $request->image->getClientOriginalExtension();

            $request->image->move('assets/frontend/uploads', $imageName);

            $category->image = $imageName;
        }

        $category->save();

        Alert::success('Good', 'Category Updated Successfully');
        return redirect()->route('categories')->with('success', 'Category Updated Successfully.');
    }

    //all Products
    public function Products()
    {
        $data = Products::orderBy('id', 'desc')->get();

        return view('backend.product.all_products', compact('data'));
    }


    //Addproducts
    public function Addproducts()
    {
        $data = Category::orderBy('id', 'desc')->get();
        return view('backend.product.add_product', compact('data'));
    }

    //Add__Products to database
    public function Add__Products(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'current_price' => 'required',
            // 'howUse' => 'required',
            // 'ingredients' => 'required',
            'quantity' => 'required',
            'sub_title' => 'required',
            'product_image' => 'required',
        ]);

        $data = new Products();

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->price = $request->current_price;
        $data->discount_price = $request->discount_price;
        $data->quantity = $request->quantity;
        $data->howUse = $request->howUse;
        $data->ingredients = $request->ingredients;


        if ($request->product_image) {
            $imageName = time() . '_' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move('assets/frontend/uploads', $imageName);
            $data->image = $imageName;
        } else {
            $data->image = 'default.jpg';
        }

        $data->save();

        Alert::success('Good', 'Product Created successfully');
        return redirect('products')->with('message', 'Product Created successfully');
    }



    //Update_product
    public function Update_product($id)
    {
        $product = Products::findOrFail($id);
        $data = Products::orderBy('id', 'desc')->get();

        return view('backend.product.update_product', compact('product', 'data'));
    }


    //Update__product to database
    public function Update__product(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'current_price' => 'required',
            // 'discount_price' => 'required',
            'quantity' => 'required',
            'sub_title' => 'required',
            // 'howUse' => 'required',
            // 'ingredients' => 'required',
        ]);

        $data = Products::findOrFail($id);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->price = $request->current_price;
        $data->discount_price = $request->discount_price;
        $data->quantity = $request->quantity;
        $data->howUse = $request->howUse;
        $data->ingredients = $request->ingredients;


        if ($request->product_image) {
            $imageName = time() . '_' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move('assets/frontend/uploads', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        Alert::success('Good', 'Product Updated successfully');
        return redirect('products')->with('message', 'Product Updated successfully');
    }



    //Delete Product
    public function Delete_product($id)
    {

        $product = Products::findOrFail($id);

        $product->delete();

        Alert::success('Good', 'Product Deleted successfully');
        return redirect()->route('products')->with('success', 'Product Deleted Successfully.');
    }

    //Orders
    public function Orders()
    {

        $data = Order::orderBy('id', 'desc')->get();

        return view('backend.orders.orders', compact('data'));
    }

    //changing delivery & payment status
    public function deliverd($id)
    {

        $order = order::find($id);

        // dd($order->delivery_status);

        if ($order->delivery_status == 'Processing') {

            $order->delivery_status = 'Delivered';
        } else {

            $order->delivery_status = 'Processing';
        }

        $order->payment_status = 'Paid';

        $order->save();

        Alert::success('Good', 'Order Delivery Status Changed');
        return redirect()->back()->with('message', 'Order Delivery Status Changed');
    }

    //Payments
    public function Payments()
    {

        $data = Payment::orderBy('id', 'desc')->get();

        return view('backend.payments.payments', compact('data'));
    }

    //Get-user
    public function Get_user($id)
    {

        $data = User::find($id);

        return view('backend.user.get-user', compact('data'));
    }

    //All_user
    public function All_user()
    {

        $data = User::where('usertype', '=', '0')->orderBy('id', 'desc')->get();

        return view('backend.user.all-users', compact('data'));
    }

    //admin-users
    public function Admin_users()
    {

        $data = User::where('usertype', '!=', '0')->orderBy('id', 'desc')->get();

        return view('backend.user.admin-users', compact('data'));
    }

    //add_admin
    public function add_admin()
    {
        return view('backend.user.add-admin');
    }

    //store_admin
    public function store_admin(Request $request)
    {


        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        //Checks if email already exist b4 adding to the database
        $email =  User::where('email', $request->email)->exists();

        if ($email) {
            Alert::error('opps', 'Email Already Exist');
            return redirect()->back()->with('error', 'Email Already Exist.');
        } else {

            $data  = new User();

            $data->fname = $request->first_name;
            $data->lname = $request->last_name;
            $data->phone = $request->phone_number;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->address = $request->address;
            $data->usertype = 'ad_1e';
            $data->profile_photo = 'default.jpg';

            $data->save();

            Alert::success('Greate', 'Admin Added Successfull');
            return redirect()->route('admin_users')->with('success', "Account Registration Successfull");
        }
    }

    //Utilities
    public function Utilities()
    {

        $data = utilities::orderBy('id', 'desc')->get();

        return view('backend.utility.utility', compact('data'));
    }


    //Delete_user
    public function Delete_user($id)
    {

        $user = User::findOrFail($id);

        $user->delete();
        Alert::success('Good', 'User Deleted Successfully.');
        return redirect()->back()->with('success', 'User Deleted Successfully.');
    }


    public function update_utility($id, Request $request)
    {
        $request->validate([
            'year' => 'required|string',
            'site_name' => 'required|string',
            'address' => 'required|string',
            'phone_no' => 'required|string',
            'mail' => 'required|string',
            'twitter' => 'required|string',
            'facebook' => 'required|string',
            'linkedin' => 'required|string',
            'youtube' => 'required|string',
            'footer_note' => 'required|string',
            'description' => 'required|string',
        ]);

        $data = utilities::findOrFail($id);

        $data->year = $request->year;
        $data->key_word = $request->key_word;
        $data->title = $request->title;
        $data->site_name = $request->site_name;
        $data->address = $request->address;
        $data->phone_number = $request->phone_no;
        $data->mail = $request->mail;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->youtube = $request->youtube;
        $data->footer_note = $request->footer_note;
        $data->description = $request->description;

        $logo_img = $request->logo_img;

        $fav_icon = $request->fav_icon;

        $top_logo = $request->top_logo;

        if ($logo_img) {

            $imageName1 = time() . '_1' . $request->logo_img->getClientOriginalExtension();

            $request->logo_img->move('assets/img', $imageName1);

            $data->logo_pic = $imageName1;
        }

        if ($fav_icon) {

            $imageName2 = time() . '_2' . $request->fav_icon->getClientOriginalExtension();

            $request->fav_icon->move('assets/img', $imageName2);

            $data->fav_icon = $imageName2;
        }

        if ($top_logo) {

            $imageName3 = time() . '_3' . $request->top_logo->getClientOriginalExtension();

            $request->top_logo->move('assets/img', $imageName3);

            $data->top_logo = $imageName3;
        }

        $data->save();

        Alert::success('Great','Utility Updated Successfully');
        return redirect('utilities');
    }
}

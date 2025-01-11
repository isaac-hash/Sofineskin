<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Products;
use App\Models\utilities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('convert', function ($value) {
            return "<?php echo number_format($value, 2); ?>";
        });

        view()->composer('*', function($view){
            $view->with('products', Products::orderBy('id', 'desc')->paginate(15));
            $view->with('category', Category::orderBy('id', 'desc')->get());
            $view->with('utilities', utilities::orderBy('id', 'desc')->get());

            $view->with('totalPrice', $totalPrice = 0);

            if (Auth::user()) {
                $view->with('cart_num', Cart::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->count());
            }

        });
    }
}

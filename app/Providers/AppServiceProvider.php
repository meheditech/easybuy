<?php

namespace App\Providers;

use App\Category;
use App\Navbar;
use App\Product;
use App\Slider;
use Auth;
use Cart;
use View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //View Composer
        View::composer(['*'], function ($view)
        {
            $user =Auth::user();
            $view->with('user', $user);
        });

        View::composer(['*'], function ($view)
        {
            $c =Cart::count();
            $view->with('cart', $c);
        });

        View::composer(['*'], function ($view)
        {
            $category =Category::orderBy('id','desc')->get();
            $view->with('categories', $category);
        });

        View::composer(['*'], function ($view)
        {
            $slider = Slider::orderBy('id', 'desc')->get();
            $view->with('sliders', $slider);
        });

        View::composer(['*'], function ($view)
        {
            $nav = Navbar::orderBy('id')->get();
            $view->with('navbar', $nav);
        });
    }
}

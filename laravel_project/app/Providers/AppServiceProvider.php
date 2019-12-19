<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         *
         * For every view
         *
         */
        
        // View::share('name', 'bitm');

        /**
         *
         * For specific view
         *
         */
        

        View::composer('frontEnd.includes.header', function($view){
            $publishedCategories = Category::where('publicationStatus', 1)->get();
            $view->with('publishedCategories', $publishedCategories);
            // $view->with('name', 'bitm');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

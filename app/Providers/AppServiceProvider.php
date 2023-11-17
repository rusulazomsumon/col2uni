<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
// import requred
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Post;


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
        // must use this for each projects
        Paginator::useBootstrap();
        // category, post query global / for all page
        $categories = Category::where('status', 1)->orderBy('order_by', 'asc')->get();
        $posts = Post::where('status', 1)->inRandomOrder()->take(5)->get();
        // sharering will all 
        View::share(['categories' => $categories, 'recent_post'=>$posts]);
    }
}

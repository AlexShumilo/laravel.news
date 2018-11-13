<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\News;
use App\Category;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // отображение для футера
        View::composer('*', function($view) {
            $view->with([
                'footerLastNews' => News::with('category')->orderBy('created_at', 'desc')->take(2)->get()
            ]);
        });

        // отображение для правого сайдбара
        View::composer(['news', 'news_detail'], function($view) {
            $view->with([
                'sidebarCategories' => Category::all(),
                'dayNews' => News::orderBy('created_at', 'desc')->orderBy('news_views', 'desc')->first(),
                'sidebarLastNews' => News::with('category')->orderBy('created_at', 'desc')->take(3)->get()
            ]);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

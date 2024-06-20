<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use App\Models\CategoryBlog;
use App\Models\Document;
use App\Models\HomePageNum;
use App\Models\News;
use App\Models\Page;
use App\Models\Price;
use App\Models\Service;
use App\Models\ShowReel;
use App\Models\Specialist;
use App\Models\Specialization;
use App\Models\Stock;

class ViewProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('pages_routes', Page::$pages_routes);
        View::share('services_routes', Service::$services_routes);
        View::share('blogs_routes', Blog::$blogs_routes);
        View::share('categories_blog_routes', CategoryBlog::$categories_blog_routes);
        View::share('news_routes', News::$news_routes);
        View::share('prices_routes', Price::$prices_routes);
        View::share('stocks_routes', Stock::$stocks_routes);
        View::share('show_reels', ShowReel::$show_reels);
        View::share('home_page_nums', HomePageNum::$home_page_nums);
        View::share('show_reels', ShowReel::$show_reels);
        View::share('specializations_routes', Specialization::$specializations_routes);
        View::share('specialist_routes', Specialist::$specialist_routes);
        View::share('document_routes', Document::$document_routes);
    }
}

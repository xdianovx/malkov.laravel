<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryBlogController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EditorImageUploadController;
use App\Http\Controllers\Admin\HomePageNumController;
use App\Http\Controllers\Admin\ShowReelController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Client\ServicePageController;
use App\Http\Controllers\Client\SpecialistPageController;
use App\Http\Controllers\Client\StockPageController;
use App\Http\Controllers\Client\WelcomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomePageController::class, 'index'], function () {
    return view('welcome');
})->name('home');

Route::get('/usligi', [ServicePageController::class, 'index'], function () {
    return view('services');
})->name('services');

Route::get('/usligi/{service_slug}', [ServicePageController::class, 'show'], function () {
    return view('service-single');
})->name('service-single');

Route::get('/vrachi', [SpecialistPageController::class, 'index'], function () {
    return view('doctors');
})->name('specialists');

Route::get('/vrachi/{specialist_slug}', [SpecialistPageController::class, 'show'], function () {
    return view('doctor');
})->name('specialist');

Route::get('/kontakty', function () {
    return view('contacts');
});

Route::get('/o-klinike', function () {
    return view('about');
});

Route::get('/novosti', function () {
    return view('news');
});

Route::get('/novosti/{slug}', function () {
    return view('news-single');
});

Route::get('/akcii', [StockPageController::class, 'index'], function () {
    return view('stocks');
})->name('stocks');

Route::get('/akcii/{stock_slug}', [StockPageController::class, 'show'], function () {
    return view('stock-single');
})->name('stock-single');



Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {

    Route::get('/dashboard', [MainController::class, 'index'])->name('index');
    Route::post('/editor-uploads', EditorImageUploadController::class)->name('image_upload');

    Route::name('services.')->prefix('services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/search',  [ServiceController::class, 'search'])->name('search');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::get('/{service_parent_slug}/create-child-service',  [ServiceController::class, 'createChild'])->name('create_child');
        Route::post('/{service_parent_slug}/store-child-service',  [ServiceController::class, 'storeChild'])->name('store_child');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/{service_slug}', [ServiceController::class, 'show'])->name('show');
        Route::get('/{service_parent_slug}/show-child/{service_slug}', [ServiceController::class, 'show_child'])->name('show_child');
        Route::get('/{service_slug}/edit', [ServiceController::class, 'edit'])->name('edit');
        Route::get('/{service_parent_slug}/edit-child-service/{service_slug}',  [ServiceController::class, 'editChild'])->name('edit_child');
        Route::patch('/{service_parent_slug}/update-child-service/{service_slug}',  [ServiceController::class, 'updateChild'])->name('update_child');
        Route::patch('/{service_slug}/update', [ServiceController::class, 'update'])->name('update');
        Route::delete('/{service_slug}', [ServiceController::class, 'destroy'])->name('destroy');
        Route::delete('/{service_parent_slug}/{service_slug}', [ServiceController::class, 'destroy'])->name('destroy_child');

        Route::name('prices.')->prefix('{service_slug}/prices')->group(function () {
            Route::get('/create', [PriceController::class, 'create'])->name('create');
            Route::post('/store', [PriceController::class, 'store'])->name('store');
            Route::get('/{price_id}', [PriceController::class, 'show'])->name('show');
            Route::get('/{price_id}/edit', [PriceController::class, 'edit'])->name('edit');
            Route::patch('/{price_id}', [PriceController::class, 'update'])->name('update');
            Route::delete('/{price_id}', [PriceController::class, 'destroy'])->name('destroy');
        });
    });
    Route::name('pages.')->prefix('pages')->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('index');
        Route::get('/search',  [PageController::class, 'search'])->name('search');
        Route::get('/create', [PageController::class, 'create'])->name('create');
        Route::post('/store', [PageController::class, 'store'])->name('store');
        Route::get('/{page_slug}', [PageController::class, 'show'])->name('show');
        Route::get('/{page_slug}/edit', [PageController::class, 'edit'])->name('edit');
        Route::patch('/{page_slug}', [PageController::class, 'update'])->name('update');
        Route::delete('/{page_slug}', [PageController::class, 'destroy'])->name('destroy');

        Route::name('home_page_nums.')->prefix('{page_slug}/home_page_nums')->group(function () {
            Route::get('/create', [HomePageNumController::class, 'create'])->name('create');
            Route::post('/store', [HomePageNumController::class, 'store'])->name('store');
            Route::get('/{home_page_num_id}/edit', [HomePageNumController::class, 'edit'])->name('edit');
            Route::patch('/{home_page_num_id}', [HomePageNumController::class, 'update'])->name('update');
            Route::delete('/{home_page_num_id}', [HomePageNumController::class, 'destroy'])->name('destroy');
        });

        Route::name('show_reels.')->prefix('{page_slug}/show_reels')->group(function () {
            Route::get('/create', [ShowReelController::class, 'create'])->name('create');
            Route::post('/store', [ShowReelController::class, 'store'])->name('store');
            Route::get('/{show_reel_id}', [ShowReelController::class, 'show'])->name('show');
            Route::get('/{show_reel_id}/edit', [ShowReelController::class, 'edit'])->name('edit');
            Route::patch('/{show_reel_id}', [ShowReelController::class, 'update'])->name('update');
            Route::delete('/{show_reel_id}', [ShowReelController::class, 'destroy'])->name('destroy');
        });
    });
    Route::name('categories_blog.')->prefix('categories_blog')->group(function () {
        Route::get('/', [CategoryBlogController::class, 'index'])->name('index');
        Route::get('/search',  [CategoryBlogController::class, 'search'])->name('search');
        Route::get('/create', [CategoryBlogController::class, 'create'])->name('create');
        Route::post('/store', [CategoryBlogController::class, 'store'])->name('store');
        Route::get('/{category_blog_slug}', [CategoryBlogController::class, 'show'])->name('show');
        Route::get('/{category_blog_slug}/edit', [CategoryBlogController::class, 'edit'])->name('edit');
        Route::patch('/{category_blog_slug}', [CategoryBlogController::class, 'update'])->name('update');
        Route::delete('/{category_blog_slug}', [CategoryBlogController::class, 'destroy'])->name('destroy');
    });
    Route::name('blogs.')->prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/search',  [BlogController::class, 'search'])->name('search');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/{blog_slug}', [BlogController::class, 'show'])->name('show');
        Route::get('/{blog_slug}/edit', [BlogController::class, 'edit'])->name('edit');
        Route::patch('/{blog_slug}', [BlogController::class, 'update'])->name('update');
        Route::delete('/{blog_slug}', [BlogController::class, 'destroy'])->name('destroy');
    });
    Route::name('news.')->prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/search',  [NewsController::class, 'search'])->name('search');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::get('/{news_slug}', [NewsController::class, 'show'])->name('show');
        Route::get('/{news_slug}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::patch('/{news_slug}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{news_slug}', [NewsController::class, 'destroy'])->name('destroy');
    });
    Route::name('stocks.')->prefix('stocks')->group(function () {
        Route::get('/', [StockController::class, 'index'])->name('index');
        Route::get('/search',  [StockController::class, 'search'])->name('search');
        Route::get('/create', [StockController::class, 'create'])->name('create');
        Route::post('/store', [StockController::class, 'store'])->name('store');
        Route::get('/{stock_slug}', [StockController::class, 'show'])->name('show');
        Route::get('/{stock_slug}/edit', [StockController::class, 'edit'])->name('edit');
        Route::patch('/{stock_slug}', [StockController::class, 'update'])->name('update');
        Route::delete('/{stock_slug}', [StockController::class, 'destroy'])->name('destroy');
    });
    Route::name('specialists.')->prefix('specialists')->group(function () {
        Route::get('/', [SpecialistController::class, 'index'])->name('index');
        Route::get('/search',  [SpecialistController::class, 'search'])->name('search');
        Route::get('/create', [SpecialistController::class, 'create'])->name('create');
        Route::post('/store', [SpecialistController::class, 'store'])->name('store');
        Route::get('/{specialist_slug}', [SpecialistController::class, 'show'])->name('show');
        Route::get('/{specialist_slug}/edit', [SpecialistController::class, 'edit'])->name('edit');
        Route::patch('/{specialist_slug}', [SpecialistController::class, 'update'])->name('update');
        Route::delete('/{specialist_slug}', [SpecialistController::class, 'destroy'])->name('destroy');
    });
    Route::name('specializations.')->prefix('specializations')->group(function () {
        Route::get('/', [SpecializationController::class, 'index'])->name('index');
        Route::get('/search',  [SpecializationController::class, 'search'])->name('search');
        Route::get('/create', [SpecializationController::class, 'create'])->name('create');
        Route::post('/store', [SpecializationController::class, 'store'])->name('store');
        Route::get('/{specialization_slug}', [SpecializationController::class, 'show'])->name('show');
        Route::get('/{specialization_slug}/edit', [SpecializationController::class, 'edit'])->name('edit');
        Route::patch('/{specialization_slug}', [SpecializationController::class, 'update'])->name('update');
        Route::delete('/{specialization_slug}', [SpecializationController::class, 'destroy'])->name('destroy');
    });
});

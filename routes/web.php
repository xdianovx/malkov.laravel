<?php

use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryBlogController;
use App\Http\Controllers\Admin\ClinicDocumentController;
use App\Http\Controllers\Admin\ClinicSertificateController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EditorImageUploadController;
use App\Http\Controllers\Admin\HomePageNumController;
use App\Http\Controllers\Admin\ModernOfficeController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ShowReelController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\BlogPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\PacientamPageController;
use App\Http\Controllers\Client\PolitikaKonfidencialnostiPageController;
use App\Http\Controllers\Client\PravilaPredostavleniyaUslugPageController;
use App\Http\Controllers\Client\RequestsController;
use App\Http\Controllers\Client\ReviewPageController;
use App\Http\Controllers\Client\ServicePageController;
use App\Http\Controllers\Client\SpecialistPageController;
use App\Http\Controllers\Client\StockPageController;
use App\Http\Controllers\Client\WelcomePageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomePageController::class, 'index'])->name('home');

Route::get('/uslugi', [ServicePageController::class, 'index'])->name('services');

Route::get('/uslugi/{service_slug}', [ServicePageController::class, 'show'])->name('service-single');

Route::get('/vrachi', [SpecialistPageController::class, 'index'])->name('specialists');

Route::get('/vrachi/{specialist_slug}', [SpecialistPageController::class, 'show'])->name('specialist');

Route::get('/kontakty', [ContactPageController::class, 'index'])->name('contacts');

Route::get('/o-nas', [AboutPageController::class, 'index'])->name('about');

Route::get('/blog/{blog_slug}', [BlogPageController::class, 'show'])->name('blogs-single');
Route::get('/news/load-more', [BlogPageController::class, 'loadMore'])->name('blogs-loadMore');
Route::get('/blog', [BlogPageController::class, 'index'])->name('blogs');

Route::get('/akcii', [StockPageController::class, 'index'])->name('stocks');
Route::get('/akcii/load-more', [StockPageController::class, 'loadMore'])->name('stocks-loadMore');
Route::get('/akcii/{stock_slug}', [StockPageController::class, 'show'])->name('stock-single');

Route::get('/otzyvy', [ReviewPageController::class, 'index'])->name('reviews');
Route::post('/otzyvy/store', [ReviewPageController::class, 'store'])->name('reviews.store');
Route::get('/politika-konfidencialnosti', [PolitikaKonfidencialnostiPageController::class, 'index'])->name('politika-konfidencialnosti');
Route::get('/pravila-predostavleniya-uslug', [PravilaPredostavleniyaUslugPageController::class, 'index'])->name('pravila-predostavleniya-uslug');

Route::get('/pacientam', [PacientamPageController::class, 'index'])->name('pacientam');
Route::post('/request_modal_section', [RequestsController::class, 'request_modal_section'])->name('request_modal_section');

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('index');

    Route::name('main_infos.')->prefix('main')->group(function () {
        Route::get('/edit', [MainController::class, 'edit'])->name('edit');
        Route::patch('/update', [MainController::class, 'update'])->name('update');
    });

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
    Route::name('reviews.')->prefix('reviews')->group(function () {
        Route::get('/', [ReviewController::class, 'index'])->name('index');
        Route::get('/search',  [ReviewController::class, 'search'])->name('search');
        Route::get('/create', [ReviewController::class, 'create'])->name('create');
        Route::post('/store', [ReviewController::class, 'store'])->name('store');
        Route::get('/{review_id}', [ReviewController::class, 'show'])->name('show');
        Route::get('/{review_id}/edit', [ReviewController::class, 'edit'])->name('edit');
        Route::patch('/{review_id}', [ReviewController::class, 'update'])->name('update');
        Route::delete('/{review_id}', [ReviewController::class, 'destroy'])->name('destroy');
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

        Route::name('documents.')->prefix('{specialist_slug}/documents')->group(function () {
            Route::get('/create', [DocumentController::class, 'create'])->name('create');
            Route::post('/store', [DocumentController::class, 'store'])->name('store');
            Route::get('/{document_id}', [DocumentController::class, 'show'])->name('show');
            Route::get('/{document_id}/edit', [DocumentController::class, 'edit'])->name('edit');
            Route::patch('/{document_id}', [DocumentController::class, 'update'])->name('update');
            Route::delete('/{document_id}', [DocumentController::class, 'destroy'])->name('destroy');
        });
    });

    Route::name('blocks.')->prefix('blocks')->group(function () {
        Route::get('/', [BlockController::class, 'index'])->name('index');
        Route::get('/{block_id}', [BlockController::class, 'show'])->name('show');
        Route::get('/{block_id}/edit', [BlockController::class, 'edit'])->name('edit');
        Route::patch('/{block_id}', [BlockController::class, 'update'])->name('update');
        Route::delete('/{block_id}', [BlockController::class, 'destroy'])->name('destroy');

        Route::name('questions.')->prefix('{block_id}/questions')->group(function () {
            Route::get('/create', [QuestionController::class, 'create'])->name('create');
            Route::post('/store', [QuestionController::class, 'store'])->name('store');
            Route::get('/{question_id}', [QuestionController::class, 'show'])->name('show');
            Route::get('/{question_id}/edit', [QuestionController::class, 'edit'])->name('edit');
            Route::patch('/{question_id}', [QuestionController::class, 'update'])->name('update');
            Route::delete('/{question_id}', [QuestionController::class, 'destroy'])->name('destroy');
        });
        Route::name('modern_offices.')->prefix('{block_id}/modern_offices')->group(function () {
            Route::get('/create', [ModernOfficeController::class, 'create'])->name('create');
            Route::post('/store', [ModernOfficeController::class, 'store'])->name('store');
            Route::get('/{modern_office_id}', [ModernOfficeController::class, 'show'])->name('show');
            Route::get('/{modern_office_id}/edit', [ModernOfficeController::class, 'edit'])->name('edit');
            Route::patch('/{modern_office_id}', [ModernOfficeController::class, 'update'])->name('update');
            Route::delete('/{modern_office_id}', [ModernOfficeController::class, 'destroy'])->name('destroy');
        });
    });
    Route::name('clinic_documents.')->prefix('clinic_documents')->group(function () {
        Route::get('/', [ClinicDocumentController::class, 'index'])->name('index');
        Route::get('/search',  [ClinicDocumentController::class, 'search'])->name('search');
        Route::get('/create', [ClinicDocumentController::class, 'create'])->name('create');
        Route::post('/store', [ClinicDocumentController::class, 'store'])->name('store');
        Route::get('/{clinic_document_id}', [ClinicDocumentController::class, 'show'])->name('show');
        Route::get('/{clinic_document_id}/edit', [ClinicDocumentController::class, 'edit'])->name('edit');
        Route::patch('/{clinic_document_id}', [ClinicDocumentController::class, 'update'])->name('update');
        Route::delete('/{clinic_document_id}', [ClinicDocumentController::class, 'destroy'])->name('destroy');
    });
    Route::name('clinic_certificates.')->prefix('clinic_certificates')->group(function () {
        Route::get('/', [ClinicSertificateController::class, 'index'])->name('index');
        Route::get('/search',  [ClinicSertificateController::class, 'search'])->name('search');
        Route::get('/create', [ClinicSertificateController::class, 'create'])->name('create');
        Route::post('/store', [ClinicSertificateController::class, 'store'])->name('store');
        Route::get('/{clinic_certificate_id}', [ClinicSertificateController::class, 'show'])->name('show');
        Route::get('/{clinic_certificate_id}/edit', [ClinicSertificateController::class, 'edit'])->name('edit');
        Route::patch('/{clinic_certificate_id}', [ClinicSertificateController::class, 'update'])->name('update');
        Route::delete('/{clinic_certificate_id}', [ClinicSertificateController::class, 'destroy'])->name('destroy');
    });
});
Route::get('/password/reset', function () {
  return redirect('/login');
});

Route::get('/password/reset/{token}', function () {
  return redirect('/login');
});

Route::get('/password/reset/{token}/{email}', function () {
  return redirect('/login');
});

Route::get('/email/verify', function () {
  return redirect('/login');
});

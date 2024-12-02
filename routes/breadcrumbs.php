<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Block;
use App\Models\Blog;
use App\Models\CarMake;
use App\Models\ClinicDocument;
use App\Models\ClinicSertificate;
use App\Models\Page;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Stock;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});
Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Страница не найдена');
});
Breadcrumbs::for('specialists', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Врачи', route('specialists'));
});
Breadcrumbs::for('pacientam', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Пациентам', route('pacientam'));
});

Breadcrumbs::for('specialist', function (BreadcrumbTrail $trail, $specialist_slug) {
    $trail->parent('specialists');
    $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
    $trail->push($specialist->h1_title, route('specialist', $specialist_slug));
});
Breadcrumbs::for('services', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Услуги', route('services'));
});

Breadcrumbs::for('service-single', function (BreadcrumbTrail $trail, $service_slug) {
    $trail->parent('services');
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $trail->push($service->title, route('service-single', $service_slug));
});
Breadcrumbs::for('reviews', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Отзывы', route('reviews'));
});
Breadcrumbs::for('politika-konfidencialnosti', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Политика конфиденциальности', route('politika-konfidencialnosti'));
});

Breadcrumbs::for('pravila-predostavleniya-uslug', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Правила предоставления услуг', route('pravila-predostavleniya-uslug'));
});

Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Контакты', route('contacts'));
});
// About
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('О нас', route('about'));
});

Breadcrumbs::for('stocks', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Акции', route('stocks'));
});

Breadcrumbs::for('stock-single', function (BreadcrumbTrail $trail, $stock_slug) {
    $trail->parent('stocks');
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();
    $trail->push($stock->title, route('stock-single', $stock_slug));
});

Breadcrumbs::for('blogs', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Блог', route('blogs'));
});

Breadcrumbs::for('blogs-single', function (BreadcrumbTrail $trail, $blog_slug) {
    $trail->parent('blogs');
    $blog = Blog::whereSlug($blog_slug)->firstOrFail();
    $trail->push($blog->title, route('blogs-single', $blog_slug));
});

// Home
Breadcrumbs::for('admin.index', function (BreadcrumbTrail $trail) {
    $trail->push('Админ панель', route('admin.index'));
});

// Pages
Breadcrumbs::for('admin.pages.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Страницы', route('admin.pages.index'));
});

Breadcrumbs::for('admin.pages.show', function (BreadcrumbTrail $trail, $page) {
    $trail->parent('admin.pages.index');
    $page = Page::whereSlug($page)->firstOrFail();
    $trail->push($page->title, route('admin.pages.show', $page->slug));
});

Breadcrumbs::for('admin.pages.edit', function (BreadcrumbTrail $trail, $page) {
    $trail->parent('admin.pages.show', $page);
    $page = Page::whereSlug($page)->firstOrFail();
    $trail->push('Редактировать страницу', route('admin.pages.edit', $page->slug));
});

// Home Page Numbers
Breadcrumbs::for('admin.pages.home_page_nums.create', function (BreadcrumbTrail $trail, $page_slug) {
    $trail->parent('admin.pages.show', $page_slug);
    $trail->push('Создать запись цифры', route('admin.pages.home_page_nums.create', $page_slug));
});

Breadcrumbs::for('admin.pages.home_page_nums.edit', function (BreadcrumbTrail $trail, $page_slug, $home_page_num_id) {
    $trail->parent('admin.pages.show', $page_slug);
    $trail->push('Изменить запись цифры', route('admin.pages.home_page_nums.edit', [$page_slug, $home_page_num_id]));
});


// Show Reels
Breadcrumbs::for('admin.pages.show_reels.create', function (BreadcrumbTrail $trail, $page_slug) {
    $trail->parent('admin.pages.show', $page_slug);
    $trail->push('Создать Show Reel', route('admin.pages.show_reels.create', $page_slug));
});

Breadcrumbs::for('admin.pages.show_reels.edit', function (BreadcrumbTrail $trail, $page_slug, $show_reel_id) {
    $trail->parent('admin.pages.show', $page_slug);
    $trail->push('Изменить Show Reel', route('admin.pages.show_reels.edit', [$page_slug, $show_reel_id]));
});

Breadcrumbs::for('admin.pages.show_reels.show', function (BreadcrumbTrail $trail, $page_slug, $show_reel_id) {
    $trail->parent('admin.pages.show', $page_slug);
    $trail->push('Просмотр Show Reel', route('admin.pages.show_reels.show', [$page_slug, $show_reel_id]));
});

Breadcrumbs::for('admin.main_infos.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Основная информация', route('admin.main_infos.edit'));
});

Breadcrumbs::for('admin.blocks.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Блоки', route('admin.blocks.index'));
});

Breadcrumbs::for('admin.blocks.show', function (BreadcrumbTrail $trail, $block_id) {
    $trail->parent('admin.blocks.index');
    $block = Block::whereId($block_id)->firstOrFail();
    $trail->push($block->title, route('admin.blocks.show', $block_id));
});

Breadcrumbs::for('admin.blocks.edit', function (BreadcrumbTrail $trail, $block_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Редактировать блок', route('admin.blocks.edit', $block_id));
});

Breadcrumbs::for('admin.blocks.questions.create', function (BreadcrumbTrail $trail, $block_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Создать вопрос', route('admin.blocks.questions.create', $block_id));
});

Breadcrumbs::for('admin.blocks.questions.show', function (BreadcrumbTrail $trail, $block_id, $question_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Просмотр записи вопрос', route('admin.blocks.questions.show', [$block_id, $question_id]));
});

Breadcrumbs::for('admin.blocks.questions.edit', function (BreadcrumbTrail $trail, $block_id, $question_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Редактировать вопрос', route('admin.blocks.questions.edit', [$block_id, $question_id]));
});

Breadcrumbs::for('admin.blocks.modern_offices.create', function (BreadcrumbTrail $trail, $block_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Создать запись cовременные кабинеты', route('admin.blocks.modern_offices.create', $block_id));
});

Breadcrumbs::for('admin.blocks.modern_offices.show', function (BreadcrumbTrail $trail, $block_id, $question_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Просмотр записи cовременные кабинеты', route('admin.blocks.modern_offices.show', [$block_id, $question_id]));
});

Breadcrumbs::for('admin.blocks.modern_offices.edit', function (BreadcrumbTrail $trail, $block_id, $modern_office_id) {
    $trail->parent('admin.blocks.show', $block_id);
    $trail->push('Редактировать запись cовременные кабинеты', route('admin.blocks.modern_offices.edit', [$block_id, $modern_office_id]));
});

// Stocks
Breadcrumbs::for('admin.stocks.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Акции', route('admin.stocks.index'));
});

Breadcrumbs::for('admin.stocks.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stocks.index');
    $trail->push('Поиск акций', route('admin.stocks.search'));
});

Breadcrumbs::for('admin.stocks.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stocks.index');
    $trail->push('Создать акцию', route('admin.stocks.create'));
});

Breadcrumbs::for('admin.stocks.show', function (BreadcrumbTrail $trail, $stock_slug) {
    $trail->parent('admin.stocks.index');
    $stock = Stock::whereSlug($stock_slug)->firstOrFail();
    $trail->push($stock->title, route('admin.stocks.show', $stock_slug));
});

Breadcrumbs::for('admin.stocks.edit', function (BreadcrumbTrail $trail, $stock_slug) {
    $trail->parent('admin.stocks.show', $stock_slug);
    $trail->push('Редактировать акцию', route('admin.stocks.edit', $stock_slug));
});

// Blogs
Breadcrumbs::for('admin.blogs.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Блог', route('admin.blogs.index'));
});

Breadcrumbs::for('admin.blogs.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.blogs.index');
    $trail->push('Поиск блога', route('admin.blogs.search'));
});

Breadcrumbs::for('admin.blogs.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.blogs.index');
    $trail->push('Создать блог', route('admin.blogs.create'));
});

Breadcrumbs::for('admin.blogs.show', function (BreadcrumbTrail $trail, $blog_slug) {
    $trail->parent('admin.blogs.index');
    $blog = Blog::whereSlug($blog_slug)->firstOrFail();
    $trail->push($blog->title, route('admin.blogs.show', $blog_slug));
});

Breadcrumbs::for('admin.blogs.edit', function (BreadcrumbTrail $trail, $blog_slug) {
    $trail->parent('admin.blogs.show', $blog_slug);
    $trail->push('Редактировать блог', route('admin.blogs.edit', $blog_slug));
});

Breadcrumbs::for('admin.reviews.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Отзывы', route('admin.reviews.index'));
});

Breadcrumbs::for('admin.reviews.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.reviews.index');
    $trail->push('Поиск отзыва', route('admin.reviews.search'));
});

Breadcrumbs::for('admin.reviews.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.reviews.index');
    $trail->push('Создать отзыв', route('admin.reviews.create'));
});

Breadcrumbs::for('admin.reviews.show', function (BreadcrumbTrail $trail, $review_id) {
    $trail->parent('admin.reviews.index');
    $trail->push($review_id, route('admin.reviews.show', $review_id));
});

Breadcrumbs::for('admin.reviews.edit', function (BreadcrumbTrail $trail, $review_id) {
    $trail->parent('admin.reviews.show', $review_id);
    $trail->push('Редактировать отзыв', route('admin.reviews.edit', $review_id));
});


Breadcrumbs::for('admin.specialists.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Специалисты', route('admin.specialists.index'));
});

Breadcrumbs::for('admin.specialists.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.specialists.index');
    $trail->push('Поиск специалиста', route('admin.specialists.search'));
});

Breadcrumbs::for('admin.specialists.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.specialists.index');
    $trail->push('Создать специалиста', route('admin.specialists.create'));
});

Breadcrumbs::for('admin.specialists.show', function (BreadcrumbTrail $trail, $specialist_slug) {
    $trail->parent('admin.specialists.index');
    $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
    $trail->push($specialist->title, route('admin.specialists.show', $specialist_slug));
});

Breadcrumbs::for('admin.specialists.edit', function (BreadcrumbTrail $trail, $specialist_slug) {
    $trail->parent('admin.specialists.show', $specialist_slug);
    $trail->push('Редактировать специалиста', route('admin.specialists.edit', $specialist_slug));
});

Breadcrumbs::for('admin.specialists.documents.create', function (BreadcrumbTrail $trail, $specialist_slug) {
    $trail->parent('admin.specialists.show', $specialist_slug);
    $trail->push('Создать документ', route('admin.specialists.documents.create', $specialist_slug));
});

Breadcrumbs::for('admin.specialists.documents.show', function (BreadcrumbTrail $trail, $specialist_slug, $document_id) {
    $trail->parent('admin.specialists.show', $specialist_slug);
    $trail->push($document_id, route('admin.specialists.documents.show', [$specialist_slug, $document_id]));
});

Breadcrumbs::for('admin.specialists.documents.edit', function (BreadcrumbTrail $trail, $specialist_slug, $document_id) {
    $trail->parent('admin.specialists.show', $specialist_slug);
    $trail->push('Редактировать документ', route('admin.specialists.documents.edit', [$specialist_slug, $document_id]));
});

Breadcrumbs::for('admin.clinic_documents.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Документы клиники', route('admin.clinic_documents.index'));
});

Breadcrumbs::for('admin.clinic_documents.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.clinic_documents.index');
    $trail->push('Поиск документов клиники', route('admin.clinic_documents.search'));
});

Breadcrumbs::for('admin.clinic_documents.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.clinic_documents.index');
    $trail->push('Создать документ клиники', route('admin.clinic_documents.create'));
});

Breadcrumbs::for('admin.clinic_documents.show', function (BreadcrumbTrail $trail, $clinic_document_id) {
    $trail->parent('admin.clinic_documents.index');
    $document = ClinicDocument::whereId($clinic_document_id)->firstOrFail();
    $trail->push($document->title, route('admin.clinic_documents.show', $clinic_document_id));
});

Breadcrumbs::for('admin.clinic_documents.edit', function (BreadcrumbTrail $trail, $clinic_document_id) {
    $trail->parent('admin.clinic_documents.show', $clinic_document_id);
    $trail->push('Редактировать документ клиники', route('admin.clinic_documents.edit', $clinic_document_id));
});
Breadcrumbs::for('admin.clinic_certificates.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.index');
    $trail->push('Сертификаты клиники', route('admin.clinic_certificates.index'));
});

Breadcrumbs::for('admin.clinic_certificates.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.clinic_certificates.index');
    $trail->push('Поиск сертификатов клиники', route('admin.clinic_certificates.search'));
});

Breadcrumbs::for('admin.clinic_certificates.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.clinic_certificates.index');
    $trail->push('Создать сертификат клиники', route('admin.clinic_certificates.create'));
});

Breadcrumbs::for('admin.clinic_certificates.show', function (BreadcrumbTrail $trail, $clinic_certificate_id) {
    $trail->parent('admin.clinic_certificates.index');
    $certificate = ClinicSertificate::whereId($clinic_certificate_id)->firstOrFail();
    $trail->push($certificate->title, route('admin.clinic_certificates.show', $clinic_certificate_id));
});

Breadcrumbs::for('admin.clinic_certificates.edit', function (BreadcrumbTrail $trail, $clinic_certificate_id) {
    $trail->parent('admin.clinic_certificates.show', $clinic_certificate_id);
    $trail->push('Редактировать сертификат клиники', route('admin.clinic_certificates.edit', $clinic_certificate_id));
});

Breadcrumbs::for('admin.services.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Услуги', route('admin.services.index'));
});

Breadcrumbs::for('admin.services.search', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.services.index');
    $trail->push('Поиск услуг', route('admin.services.search'));
});

Breadcrumbs::for('admin.services.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.services.index');
    $trail->push('Создать услугу', route('admin.services.create'));
});

Breadcrumbs::for('admin.services.create_child', function (BreadcrumbTrail $trail, $service_parent_slug) {
    $trail->parent('admin.services.show', $service_parent_slug);
    $trail->push('Создать дочернюю услугу', route('admin.services.create_child', $service_parent_slug));
});

Breadcrumbs::for('admin.services.show', function (BreadcrumbTrail $trail, $service_slug) {
    $trail->parent('admin.services.index');
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $trail->push( $service->title, route('admin.services.show', $service_slug));
});

Breadcrumbs::for('admin.services.show_child', function (BreadcrumbTrail $trail, $service_parent_slug, $service_slug) {
    $trail->parent('admin.services.show', $service_parent_slug);
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $trail->push($service->title, route('admin.services.show_child', [$service_parent_slug, $service_slug]));
});

Breadcrumbs::for('admin.services.edit', function (BreadcrumbTrail $trail, $service_slug) {
    $trail->parent('admin.services.show', $service_slug);
    $trail->push('Редактировать услугу', route('admin.services.edit', $service_slug));
});

Breadcrumbs::for('admin.services.edit_child', function (BreadcrumbTrail $trail, $service_parent_slug, $service_slug) {
    $trail->parent('admin.services.show', $service_parent_slug);
    $service = Service::whereSlug($service_slug)->firstOrFail();
    $trail->push('Редактировать дочернюю услугу ' . $service->title, route('admin.services.edit_child', [$service_parent_slug, $service_slug]));
});

Breadcrumbs::for('admin.services.prices.create', function (BreadcrumbTrail $trail, $service_slug) {
    $trail->parent('admin.services.show', $service_slug);
    $trail->push('Создать цену', route('admin.services.prices.create', $service_slug));
});

Breadcrumbs::for('admin.services.prices.show', function (BreadcrumbTrail $trail, $service_slug, $price_id) {
    $trail->parent('admin.services.show', $service_slug);
    $trail->push('Просмотр цены', route('admin.services.prices.show', [$service_slug, $price_id]));
});

Breadcrumbs::for('admin.services.prices.edit', function (BreadcrumbTrail $trail, $service_slug, $price_id) {
    $trail->parent('admin.services.show', $service_slug);
    $trail->push('Редактировать цену', route('admin.services.prices.edit', [$service_slug, $price_id]));
});

<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});

// Home > News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Статьи', route('news'));
});

// Home > Blog > [Category]
Breadcrumbs::for('news-single', function (BreadcrumbTrail $trail, $news) {
    $trail->parent('news');
    $trail->push($news->title, route('news', $news));
});

// Home > Uslugi
Breadcrumbs::for('services', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Услуги', route('services'));
});

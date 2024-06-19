<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">

        <!-- Light Logo-->
        <a href="{{ route('admin.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('img/logo.png') }}" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/logo.png') }}" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Меню</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $pages_routes)
                        || in_array(Route::current()->getName(), $show_reels)
                        || in_array(Route::current()->getName(), $home_page_nums)) active @endif"
                        href="{{ route('admin.pages.index') }}" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="mdi mdi-book-open-page-variant"></i> <span data-key="t-layouts">{{__('admin.aside_title_page')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $services_routes)
                        || in_array(Route::current()->getName(), $prices_routes)) active @endif"
                        href="{{ route('admin.services.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-border-all"></i> <span data-key="t-layouts">{{__('admin.aside_title_service')}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $news_routes)) active @endif"
                        href="{{ route('admin.news.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-newspaper-variant-outline"></i> <span data-key="t-layouts">{{__('admin.aside_title_news')}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $stocks_routes)) active @endif"
                        href="{{ route('admin.stocks.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-newspaper-variant-outline"></i> <span data-key="t-layouts">{{__('admin.aside_title_stocks')}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link @if (in_array(Route::current()->getName(), $categories_blog_routes)
                        || in_array(Route::current()->getName(), $blogs_routes))
                            active @endif" href="#sidebarBlog" data-bs-toggle="collapse" role="button"
                        aria-expanded="@if (in_array(Route::current()->getName(), $categories_blog_routes)
                        || in_array(Route::current()->getName(), $blogs_routes))
                        true @else false @endif" aria-controls="sidebarBlog">
                        <i class="mdi mdi-tooltip-edit-outline"></i> <span data-key="t-dashboards">{{__('admin.aside_title_blog')}}</span>
                    </a>
                    <div class="collapse menu-dropdown @if (in_array(Route::current()->getName(), $categories_blog_routes)
                        || in_array(Route::current()->getName(), $blogs_routes)) show @endif" id="sidebarBlog">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories_blog.index') }}"
                                     class="nav-link @if (in_array(Route::current()->getName(), $categories_blog_routes)) active @endif" data-key="t-analytics">
                                     {{__('admin.aside_title_categories_blog_record')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $blogs_routes)) active @endif"
                                    href="{{ route('admin.blogs.index') }}" aria-expanded="false"
                                    aria-controls="sidebarBlog">
                                     <span data-key="t-layouts">{{__('admin.aside_title_blogs_record')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link @if (in_array(Route::current()->getName(), $specialist_routes)
                        || in_array(Route::current()->getName(), $specializations_routes))
                            active @endif" href="#sidebarSpecialist" data-bs-toggle="collapse" role="button"
                        aria-expanded="@if (in_array(Route::current()->getName(), $specialist_routes)
                        || in_array(Route::current()->getName(), $specializations_routes))
                        true @else false @endif" aria-controls="sidebarSpecialist">
                        <i class="mdi mdi-tooltip-edit-outline"></i> <span data-key="t-dashboards">{{__('admin.aside_title_specialists_record')}}</span>
                    </a>
                    <div class="collapse menu-dropdown @if (in_array(Route::current()->getName(), $specialist_routes)
                        || in_array(Route::current()->getName(), $specializations_routes)) show @endif" id="sidebarSpecialist">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.specialists.index') }}"
                                     class="nav-link @if (in_array(Route::current()->getName(), $specialist_routes)) active @endif" data-key="t-analytics">
                                     {{__('admin.aside_title_specialists_record')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $specializations_routes)) active @endif"
                                    href="{{ route('admin.specializations.index') }}" aria-expanded="false"
                                    aria-controls="sidebarSpecialist">
                                     <span data-key="t-layouts">{{__('admin.aside_title_specializations_record')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>

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
                        <i class="mdi mdi-book-open-page-variant"></i> <span data-key="t-layouts">{{__('admin.aside_title_pages')}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $blocks_routes)
                        || in_array(Route::current()->getName(), $questions_routes)
                        || in_array(Route::current()->getName(), $modern_office_routes)) active @endif"
                        href="{{ route('admin.blocks.index') }}" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="mdi mdi-view-agenda-outline"></i> <span data-key="t-layouts">{{__('admin.aside_title_blocks')}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $services_routes)
                        || in_array(Route::current()->getName(), $prices_routes)) active @endif"
                        href="{{ route('admin.services.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-offer"></i> <span data-key="t-layouts">{{__('admin.aside_title_service')}}</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $stocks_routes)) active @endif"
                        href="{{ route('admin.stocks.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-sale"></i> <span data-key="t-layouts">{{__('admin.aside_title_stocks')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $blogs_routes)) active @endif"
                        href="{{ route('admin.blogs.index') }}" aria-expanded="false"
                        aria-controls="sidebarBlog">
                        <i class="mdi mdi-tooltip-edit-outline"></i> <span data-key="t-layouts">{{__('admin.aside_title_blogs_record')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.specialists.index') }}"
                         class="nav-link @if (in_array(Route::current()->getName(), $specialist_routes)|| in_array(Route::current()->getName(), $document_routes)) active @endif" data-key="t-analytics">
                         <i class="mdi mdi-human-male-male"></i>{{__('admin.aside_title_specialists_record')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $reviews_routes)) active @endif"
                        href="{{ route('admin.reviews.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-offer"></i> <span data-key="t-layouts">{{__('admin.aside_title_reviews')}}</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $clinic_document_routes)) active @endif"
                        href="{{ route('admin.clinic_documents.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-file-document"></i> <span data-key="t-layouts">{{__('admin.list_documents')}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link  @if (in_array(Route::current()->getName(), $clinic_certificates_routes)) active @endif"
                        href="{{ route('admin.clinic_certificates.index') }}" aria-expanded="false"
                        aria-controls="sidebarLayouts">
                        <i class="mdi mdi-file-document"></i> <span data-key="t-layouts">{{__('admin.list_certificates')}}</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>

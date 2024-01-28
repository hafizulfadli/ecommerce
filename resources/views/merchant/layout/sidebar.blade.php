<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
                <img src="{{ asset('template') }}/assets/img/market.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Ecommerce </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        {{-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('master_status') ? 'active' : '' }} " href="/master_status">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-check-circle text-success text-sm opacity-10"></i>

                    </div>
                    <span class="nav-link-text ms-1">Master Status</span>
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('city') ? 'active' : '' }} " href="/city">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-city text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">City</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('merchant') ? 'active' : '' }} " href="/merchant">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-store text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Merchant</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('products') ? 'active' : '' }} " href="/products">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-box text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('order_items') ? 'active' : '' }} " href="/order_items">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-shopping-cart text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Order Items</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users') ? 'active' : '' }} " href="/users">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('laporan1') ? 'active' : '' }} " href="/laporan1">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan Sales 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('laporan2') ? 'active' : '' }} " href="/laporan2">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan Sales 2 </span>
                </a>
            </li>
            </li>
            </li>
        </ul>
        </div>
    </aside>

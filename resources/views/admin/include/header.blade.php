<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar d-none d-xl-block">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="app-emailbox.html">Email</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;">Projects</a>
                </li>
                <li class="nav-item d-none d-xxl-block">
                    <a class="nav-link" href="javascript:;">Events</a>
                </li>
                <li class="nav-item d-none d-xxl-block">
                    <a class="nav-link" href="app-to-do.html">Todo</a>
                </li>
            </ul>
        </div>
        <div class="search-toggle-icon d-xl-none ms-auto">
            <i class="bi bi-search"></i>
        </div>
        <form class="searchbar d-none d-xl-flex ms-auto">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-3">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center gap-1">
                            <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                            <div class="user-name d-none d-sm-block">Jhon Deo</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="pages-user-profile.html">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index2.html">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                                    <div class="setting-text ms-3"><span>Dashboard</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Earnings</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Downloads</span></div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                            <form action="{{route('logout')}}" method="post" id="logoutForm">
                                @csrf

                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="projects">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="row row-cols-3 gx-2">
                            <div class="col">
                                <a href="ecommerce-orders.html">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                                            <i class="bi bi-cart-plus-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Orders</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="javascript:;">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Users</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="ecommerce-products-grid.html">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                                            <i class="bi bi-bank2"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Products</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="component-media-object.html">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                                            <i class="bi bi-collection-play-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Media</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="pages-user-profile.html">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Account</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="javascript:;">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                                            <i class="bi bi-file-earmark-text-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Docs</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="ecommerce-orders-detail.html">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                                            <i class="bi bi-credit-card-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Payment</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="javascript:;">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                                            <i class="bi bi-calendar-check-fill"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Events</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="javascript:;">
                                    <div class="apps p-2 radius-10 text-center">
                                        <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                                            <i class="bi bi-book-half"></i>
                                        </div>
                                        <p class="mb-0 apps-name">Story</p>
                                    </div>
                                </a>
                            </div>
                        </div><!--end row-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>


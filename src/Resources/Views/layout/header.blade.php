<header class="t-header">
    <div class="campaign">
        <div class="container">
            <a class="message">30% discount on all courses only until</a>
            <div id="count-down-timer" data-countdown="2021-07-8 00:00:00" class="count-down-timer"></div>
        </div>
    </div>
    <div class="container">
        <div class="t-header-row">
            <div class="t-header-right">
                <div class="t-header-logo"><a href="/"></a></div>
                <div class="t-header-search">
                    <div class="t-header-searchbox">
                        <input type="text" placeholder="Search course / article / instructor">
                        <div class="t-header-search-content">
                            <div class="t-header-search-result-filters">
                                <div class="t-header-search-filter-item f-all active"><span>All (20)</span></div>
                                <div class="t-header-search-filter-item f-courses "><span>Courses (13)</span></div>
                                <div class="t-header-search-filter-item f-article "><span>Articles (5)</span></div>
                                <div class="t-header-search-filter-item f-teacher "><span>Instructors (2)</span></div>
                            </div>
                            <div class="t-header-search-result">
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Laravel Course</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>Course on Creating a Framework Similar to Laravel</p>
                                        <p class="t-header-search-result-right-info">
                                            Course Instructor: Amanuel Wakshum
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="img/banner/laravel-payment-processing.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-header-left">
                <div class="icons">
                    <div class="search-icon"></div>
                    <div class="menu-icon"></div>
                </div>

                <div class="join-teachers">
                    <a href="#">Teach on the Site</a>
                </div>
                @auth()
                    <div class="user-menu-account">
                        <div class="user-image">
                            <img src="{{auth()->user()->thumb}}" alt="{{ auth()->user()->name }}">
                        </div>
                        <span>My User Profile</span>
                        <div class="user-menu-account-dropdown">
                            <ul>
                                <li><a href="{{ route('users.editProfile') }}">View Profile</a></li>
                                <li><a href="">My Purchases</a></li>
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="login-register-btn ">
                        <div><a class="btn-login" href="{{ route('login') }}">Login</a></div>
                        <div><a class="btn-register" href="{{ route('register') }}">Register</a></div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    <nav id="navigation" class="navigation">
        <!-- After login in responsive mode -->
        <div class="after-login d-none">
            <a href="">View Profile</a>
            <a href="">My Purchases</a>
            <a href="">Dashboard</a>
            <a href="">Logout</a>
        </div>
        <!---->
        <div class="login-register-btn d-none">
            <div><a class="btn-login" href="{{ route('login') }}">Login</a></div>
            <div><a class="btn-register" href="{{ route('register') }}">Register</a></div>
        </div>
        <div class="container">
            <ul class="nav">
                @foreach($categories as $category)
                    <li class="main-menu {{ count($category->subCategories) ? 'has-sub' : ''}}"><a href="{{$category->path()}}">{{$category->title}}</a>
                        @if(count($category->subCategories))
                            <div class="sub-menu">
                                <div class="container">
                                    @foreach($category->subCategories as $subCategory)
                                    <div><a href="{{$subCategory->path()}}">{{$subCategory->title}}</a></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="triangle"></div>
                        @endif
                    </li>
                @endforeach
                <li class="main-menu d-none"><a href="#">About Us</a></li>
                <li class="main-menu"><a href="#">Contact Us</a></li>
                <li class="main-menu join-teachers-li"><a href="#">Teach on the Site</a></li>
                <li class="main-menu"><a href="#">Articles</a></li>
            </ul>

            <div class="dark-light">
                <svg class="moon" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                </svg>
                <svg class="sun" fill="#ffce45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M277.3 32h-42.7v64h42.7V32zm129.1 43.7L368 114.1l29.9 29.9 38.4-38.4-29.9-29.9zm-300.8 0l-29.9 29.9 38.4 38.4 29.9-29.9-38.4-38.4zM256 128c-70.4 0-128 57.6-128 128 0 70.4 57.6 128 128 128s128-57.6 128-128c0-70.4-57.6-128-128-128zm0 192c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm80 36.3h-64v64h64v-64zm-288.4 29.4l38.4 38.4 29.9-29.9-38.4-38.4-29.9 29.9zm300.8 0l29.9-29.9-38.4-38.4-29.9 29.9 38.4 38.4zM49 223.1l-42.6 42.7 64 64 42.7-42.6-64-64zm490.3 0l-42.6 42.7 64 64 42.7-42.6-64-64zm-42.7 300.8l-42.7 42.6 64 64 42.6-42.7-64-64zm-390.6 0l-42.6 42.7 64 64 42.6-42.7-64-64zm-49-145.3l-42.6 42.7 64 64 42.7-42.7-64-64z"></path>
                </svg>
            </div>
        </div>
    </nav>
</header>

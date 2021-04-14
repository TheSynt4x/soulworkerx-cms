<header class="header header-static bg-black header-sticky">
    <div class="default-header menu-right">
        <div class="container container-1520">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 order-md-1 order-lg-1 mt-10 mb-0">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <h1 style="font-family: debug; color: white; font-size: 45px;">SoulWorkerX</h1>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-md-3 order-lg-2 d-flex justify-content-center">
                    <nav class="main-menu menu-style-2">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Top PVP Players</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Community</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Discord</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3">
                    <div class="header-right-wrap">
                        <ul>
                            <li class="active"><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>

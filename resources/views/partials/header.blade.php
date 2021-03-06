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
                            <li id="home"><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                            <li id="pages"><a href="#">@lang('messages.pages')</a>
                                <ul class="sub-menu">
                                    <li><a href="#">@lang('messages.rankings')</a></li>
                                </ul>
                            </li>
                            <li><a href="#">@lang('messages.community')</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Discord</a></li>
                                </ul>
                            </li>
                            @if (request()->session()->get('user'))
                                <li id="store"><a href="{{ route('store') }}">@lang('messages.store')</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3">
                    <div class="header-right-wrap">
                        <ul style="text-align: right; margin-right: 50px;">
                            @if (!request()->session()->get('user'))
                                <li id="login"><a href="{{ route('login') }}">@lang('messages.login')</a></li>
                                <li id="register"><a href="{{ route('register') }}">@lang('messages.register')</a>
                                </li>
                            @else
                                <li id="user"><a href="#">{{ request()->user()->ACCOUNT_ID ?? '' }}</a>
                                    <ul class="sub-menu" style="text-align: left;">
                                        <li><a
                                                href="{{ route('change-password') }}">@lang('messages.change_password')</a>
                                        </li>
                                        <li><a href="{{ route('logout') }}">@lang('messages.logout')</a></li>
                                    </ul>
                                </li>
                            @endif
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

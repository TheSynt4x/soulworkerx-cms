@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        @include('partials.flash')

                        <h3>{{ __('messages.login_to_account') }}</h3>
                        <!-- Login Form -->
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-12 mb-30"><input type="text"
                                        placeholder="{{ __('messages.enter_username') }}" name="username"></div>
                                <div class="col-12 mb-20"><input type="password"
                                        placeholder="{{ __('messages.enter_password') }}" name="password"></div>
                                <div class="col-12 mb-15">

                                    <input type="checkbox" id="remember_me" name="remember_me">
                                    <label for="remember_me">{{ __('messages.remember_me') }}</label>

                                </div>
                                <div class="col-12"><input type="submit" value="{{ __('messages.login') }}"></div>

                            </div>

                            @csrf
                        </form>
                        <div class="col-12">
                            <h4>{{ __('messages.no_account') }} <a class="text--primary"
                                    href="{{ route('register') }}">{{ __('messages.register') }}</a>!
                            </h4>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var element = document.getElementById("login");
        element.classList.add("active");
    </script>
@endsection

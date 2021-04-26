@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        @include('partials.flash')

                        <h3>@lang('messages.register_new_account')</h3>

                        <!-- Register Form -->
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <input class="@error('username') form-control is-invalid @enderror" type="text"
                                        placeholder="@lang('messages.enter_username')" name="username"
                                        value="{{ old('username') }}">

                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('password') form-control is-invalid @enderror" type="password"
                                        placeholder="@lang('messages.enter_password')" name="password">

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('confirm_password') form-control is-invalid @enderror"
                                        type="password" placeholder="@lang('messages.enter_confirm_password')"
                                        name="confirm_password">

                                    @error('confirm_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-15">
                                    <input class="@error('password') form-control is-invalid @enderror" type="checkbox"
                                        id="agree" name="agree">
                                    <label for="agree">@lang('messages.terms_and_conditions')</label>

                                    @error('agree')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <input type="submit" value="@lang('messages.register')">
                                </div>
                            </div>

                            @csrf
                        </form>

                        <div class="col-12">
                            <h4>@lang('messages.already_has_account') <a class="text--primary"
                                    href="{{ route('login') }}">@lang('messages.login')</a>!
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
        var element = document.getElementById("register");
        element.classList.add("active");

    </script>
@endsection

@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        @include('partials.flash')

                        <h3>{{ __('messages.change_password') }}</h3>

                        <p>{{__('messages.change_password_text')}}</p>

                        <!-- Change password form -->
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <input class="@error('current_password') form-control is-invalid @enderror" type="text"
                                        placeholder="{{ __('messages.enter_current_password') }}" name="current_password">

                                    @error('current_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('new_password') form-control is-invalid @enderror" type="password"
                                        placeholder="{{ __('messages.enter_new_password') }}" name="new_password">

                                    @error('new_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('confirm_password') form-control is-invalid @enderror"
                                        type="password" placeholder="{{ __('messages.enter_confirm_password') }}"
                                        name="confirm_password">

                                    @error('confirm_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <input style="width: 200px;" type="submit" value="{{ __('messages.change_password') }}">
                                </div>
                            </div>

                            @csrf
                        </form>
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

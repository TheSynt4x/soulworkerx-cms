@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        @include('partials.flash')

                        <h3>Register</h3>

                        <!-- Register Form -->
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <input class="@error('username') form-control is-invalid @enderror" type="text"
                                        placeholder="Enter your username" name="username" value="{{ old('username') }}">

                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('password') form-control is-invalid @enderror" type="password"
                                        placeholder="Enter your passward" name="password">

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-20">
                                    <input class="@error('confirm_password') form-control is-invalid @enderror"
                                        type="password" placeholder="Confirm your password" name="confirm_password">

                                    @error('confirm_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-15">
                                    <input class="@error('password') form-control is-invalid @enderror" type="checkbox"
                                        id="agree" name="agree">
                                    <label for="agree">I agree to the terms & conditions.</label>

                                    @error('agree')
                                        <div class="invalid-feedback">
                                            You must accept terms & conditions.
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <input type="submit" value="Sign Up">
                                </div>
                            </div>

                            @csrf
                        </form>

                        <div class="col-12">
                            <h4>Already have an account? please click <a class="text--primary"
                                    href="{{ route('login') }}">Login</a>!
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

@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        <h3>Register</h3>
                        <!-- Login Form -->
                        <form action="#">
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <input type="text" placeholder="Type your username">
                                </div>

                                <div class="col-12 mb-30">
                                    <input type="email" placeholder="Type your email">
                                </div>

                                <div class="col-12 mb-20">
                                    <input type="password" placeholder="Enter your passward">
                                </div>

                                <div class="col-12 mb-20">
                                    <input type="password" placeholder="Confirm your password">
                                </div>

                                <div class="col-12 mb-15">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">I agree to the terms & conditions.</label>
                                </div>
                                <div class="col-12"><input type="submit" value="LOGIN"></div>

                            </div>
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

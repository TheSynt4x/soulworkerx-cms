@extends('layouts.main')

@section('content')
    <div class="login-section section pt-50 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-12 d-flex justify-content-center">
                    <div class="gilbard-login">

                        <h3>Login to your account</h3>
                        <!-- Login Form -->
                        <form action="#">
                            <div class="row">
                                <div class="col-12 mb-30"><input type="text"
                                        placeholder="Type your username or email address"></div>
                                <div class="col-12 mb-20"><input type="password" placeholder="Enter your passward"></div>
                                <div class="col-12 mb-15">

                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>

                                    <a href="#" class="text--primary">Forgotten pasward?</a>

                                </div>
                                <div class="col-12"><input type="submit" value="LOGIN"></div>

                            </div>
                        </form>
                        <div class="col-12">
                            <h4>Don’t have account? please click <a class="text--primary"
                                    href="{{ route('register') }}">Register</a>!
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


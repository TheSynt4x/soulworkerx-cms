@extends('layouts.main')


@section('content')
    <div class="forum-area section pt-50 pt-lg-50 pt-md-50 pt-sm-60 pt-xs-50 pb-50 pb-lg-50 pb-md-50 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2><span class="color-blue">news</span></h2>
                    </div>

                    <!--Single Forum Start-->
                    <div class="single-forum mb-30">
                        <h3><a href="#">welcome to SoulWorkerX</a></h3>
                        <div class="forum-meta">
                            <ul>
                                <li><a href="#"><img src="{{ url('/') }}/assets/images/author/forum-author1.png"
                                            alt="">admin</a></li>
                                <li>posted 5 min ago</li>
                            </ul>
                        </div>
                        <span class="sticker">new</span>
                    </div>
                    <!--Single Forum End-->
                    <div class="single-forum mb-30">
                        <h3><a href="#">welcome to SoulWorkerX</a></h3>
                        <div class="forum-meta">
                            <ul>
                                <li><a href="#"><img src="{{ url('/') }}/assets/images/author/forum-author1.png"
                                            alt="">admin</a></li>
                                <li>posted 5 min ago</li>
                            </ul>
                        </div>
                        <span class="sticker">new</span>
                    </div>
                    <div class="single-forum mb-30">
                        <h3><a href="#">welcome to SoulWorkerX</a></h3>
                        <div class="forum-meta">
                            <ul>
                                <li><a href="#"><img src="{{ url('/') }}/assets/images/author/forum-author1.png"
                                            alt="">admin</a></li>
                                <li>posted 5 min ago</li>
                            </ul>
                        </div>
                        <span class="sticker">new</span>
                    </div>
                    <div class="single-forum mb-30">
                        <h3><a href="#">welcome to SoulWorkerX</a></h3>
                        <div class="forum-meta">
                            <ul>
                                <li><a href="#"><img src="{{ url('/') }}/assets/images/author/forum-author1.png"
                                            alt="">admin</a></li>
                                <li>posted 5 min ago</li>
                            </ul>
                        </div>
                        <span class="sticker">new</span>
                    </div>
                    <div class="single-forum mb-30">
                        <h3><a href="#">welcome to SoulWorkerX</a></h3>
                        <div class="forum-meta">
                            <ul>
                                <li><a href="#"><img src="{{ url('/') }}/assets/images/author/forum-author1.png"
                                            alt="">admin</a></li>
                                <li>posted 5 min ago</li>
                            </ul>
                        </div>
                        <span class="sticker">new</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-pagination text-center">
                        <ul class="page-pagination">
                            <li><a href="#"><i class="icofont-long-arrow-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
  var element = document.getElementById("home");
  element.classList.add("active");
</script>
@endsection

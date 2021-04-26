@extends('layouts.main')


@section('content')
    <div class="forum-area section pt-50 pt-lg-50 pt-md-50 pt-sm-60 pt-xs-50 pb-50 pb-lg-50 pb-md-50 pb-sm-60 pb-xs-50">
        <div class="container">
            @include('partials.flash')

            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2><span class="color-blue">@lang('messages.news')</span></h2>
                    </div>

                    @if (!count($news))
                        <div style="margin-bottom: 240px;">
                            <h3>@lang('messages.no_news')</h3>
                        </div>
                    @else
                        @foreach ($news as $post)
                            <div class="single-forum mb-30">
                                <h3><a href="#">{{ $post->TITLE }}</a></h3>
                                <div class="forum-meta">
                                    <ul>
                                        <li>{{ \Carbon\Carbon::parse($post->DATE)->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <div class="forum-text" style="margin-top: 20px;">
                                    {{ $post->TEXT }}
                                </div>
                                {{-- <span class="sticker">new</span> --}}
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>

            {{ $news->links() }}

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var element = document.getElementById("home");
        element.classList.add("active");

    </script>
@endsection

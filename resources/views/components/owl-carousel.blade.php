<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
<div class="col-lg-8">
    <div class="owl-carousel owl-theme" id="main-banner-carousel">
        @foreach($articles as $article)
            <div class="item">
                <div class="carousel-content-wrapper mb-2">
                    <div class="carousel-content">
                        <h1 class="font-weight-bold">
                            {{$article['title']}}
                        </h1>
{{--                        <h5 class="font-weight-normal m-0">--}}
{{--                            {{$article['description']}}--}}
{{--                        </h5>--}}
                        <p class="text-color m-0 pt-2 d-flex align-items-center">
                            <span class="fs-10 mr-1">{{\Carbon\Carbon::parse($article['publishedAt'])->diffForHumans()}}</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                    <div class="carousel-image">
                        <img src="{{$article['urlToImage']}}" alt="" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

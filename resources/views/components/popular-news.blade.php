<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<div class="popular-news">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">Popular News</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            @for($i = 0; $i < count($articles); $i += 3)
                <div class="row {{$i !== 0 ? "mt-3" : ""}}">
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img
                                src="{{$articles[$i]['urlToImage']}}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{$articles[$i]['author']}}</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            {{$articles[$i]['title']}}
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img
                                src="{{$articles[$i + 1]['urlToImage']}}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{$articles[$i + 1]['author']}}</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            {{$articles[$i + 1]['title']}}
                        </h5>
                    </div>
                    <div class="col-sm-4 mb-5 mb-sm-2">
                        <div class="position-relative image-hover">
                            <img
                                src="{{$articles[$i + 2]['urlToImage']}}"
                                class="img-fluid"
                                alt="world-news"
                            />
                            <span class="thumb-title">{{$articles[$i + 2]['author']}}</span>
                        </div>
                        <h5 class="font-weight-600 mt-3">
                            {{$articles[$i + 2]['title']}}
                        </h5>
                    </div>
                </div>
            @endfor
        </div>
        <div class="col-lg-3">
            <div class="position-relative mb-3">
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/star-magazine-15.jpg')}}"--}}
{{--                    class="img-fluid"--}}
{{--                    alt="world-news"--}}
{{--                />--}}
                <iframe class="img-fluid" src="https://www.youtube.com/embed/lf7cYehUrFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                <div class="video-thumb text-muted">--}}
{{--                    <span><i class="mdi mdi-menu-right"></i></span>LIVE--}}
{{--                </div>--}}
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                        <h3 class="section-title">Latest News</h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                        <h5 class="font-weight-600 mt-0 mb-0">
                            South Korea’s Moon Jae-in sworn in vowing address
                        </h5>
                        <p class="text-color m-0 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                        <h5 class="font-weight-600 mt-0 mb-0">
                            South Korea’s Moon Jae-in sworn in vowing address
                        </h5>
                        <p class="text-color m-0 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                        <h5 class="font-weight-600 mt-0 mb-0">
                            South Korea’s Moon Jae-in sworn in vowing address
                        </h5>
                        <p class="text-color m-0 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="pt-4">
                        <h5 class="font-weight-600 mt-0 mb-0">
                            South Korea’s Moon Jae-in sworn in vowing address
                        </h5>
                        <p class="text-color m-0 d-flex align-items-center">
                            <span class="fs-10 mr-1">2 hours ago</span>
                            <i class="mdi mdi-bookmark-outline mr-3"></i>
                            <span class="fs-10 mr-1">126</span>
                            <i class="mdi mdi-comment-outline"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

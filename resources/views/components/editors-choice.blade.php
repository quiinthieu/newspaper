<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<div class="editors-news">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">Editors' Choice</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{$articles[0]['urlToImage']}}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">{{$articles[0]['author']}}</span>
            </div>
            <h1 class="font-weight-600 mt-3">
                {{$articles[0]['title']}}
            </h1>
            <p class="fs-15 font-weight-normal">
                {{$articles[0]['description']}}
            </p>
        </div>
        <div class="col-lg-6 mb-5 mb-sm-2">
            @for($i = 1; $i < count($articles); $i += 2)
                <div class="row {{$i === 3 ? "mt-3" : ""}}">
                    <div class="col-sm-6 mb-5 mb-sm-2">
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
{{--                        <p class="fs-15 font-weight-normal">--}}
{{--                            {{$articles[$i]['description']}}--}}
{{--                        </p>--}}
                    </div>
                    <div class="col-sm-6 {{$i !== 3 ? "mb-5 mb-sm-2" : ""}}">
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
{{--                        <p class="fs-15 font-weight-normal">--}}
{{--                            {{$articles[$i + 1]['description']}}--}}
{{--                        </p>--}}
                    </div>
                </div>
            @endfor
            </div>
        </div>
</div>


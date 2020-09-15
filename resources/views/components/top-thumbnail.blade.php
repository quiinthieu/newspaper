<!-- Well begun is half done. - Aristotle -->
{{--banner-top-thumb-wrap--}}
<div class="container py-3 mb-5 border-bottom">
    <div class="row align-items-stretch">
{{--        {{print_r(json_decode($articles, true))}}--}}
        @foreach($articles as $article)
            <div class="col-lg-3 col-md-12 d-flex justify-content-between mb-3 m-lg-0 px-1">
                <div>
                    <img
                        src="{{$article['urlToImage']}}"
                        alt="thumb"
                        class="banner-top-thumb"
                    />
                </div>
                <h5 class="m-0 font-weight-bold">
                    {{$article['title']}}
                </h5>
            </div>
        @endforeach
{{--        <div class="d-flex justify-content-between mb-3 mb-lg-0">--}}
{{--            <div>--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/star-magazine-1.jpg')}}"--}}
{{--                    alt="thumb"--}}
{{--                    class="banner-top-thumb"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <h5 class="m-0 font-weight-bold">--}}
{{--                The morning after: What people--}}
{{--            </h5>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-between mb-3 mb-lg-0">--}}
{{--            <div>--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/star-magazine-2.jpg')}}"--}}
{{--                    alt="thumb"--}}
{{--                    class="banner-top-thumb"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <h5 class="m-0 font-weight-bold">How Hungary produced the</h5>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-between mb-3 mb-lg-0">--}}
{{--            <div>--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/star-magazine-3.jpg')}}"--}}
{{--                    alt="thumb"--}}
{{--                    class="banner-top-thumb"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <h5 class="m-0 font-weight-bold">--}}
{{--                A sleepy island paradise's most--}}
{{--            </h5>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-between mb-3 mb-lg-0">--}}
{{--            <div>--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/star-magazine-4.jpg')}}"--}}
{{--                    alt="thumb"--}}
{{--                    class="banner-top-thumb"--}}
{{--                />--}}
{{--            </div>--}}
{{--            <h5 class="m-0 font-weight-bold">--}}
{{--                America's most popular national--}}
{{--            </h5>--}}
{{--        </div>--}}
    </div>
</div>

<!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
<div class="world-news">
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex position-relative float-left">
                <h3 class="section-title">World News</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img
                        src="{{$article['urlToImage']}}"
                        class="img-fluid"
                        alt="world-news"
                    />
                    <span class="thumb-title">{{$article['author']}}</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    {{$article['title']}}
                </h5>
{{--                <p class="fs-15 font-weight-normal">--}}
{{--                    {{$article['description']}}--}}
{{--                </p>--}}
                <a href="{{$article['url']}}" target="_blank" class="font-weight-bold text-dark pt-2"
                >Read Article</a
                >
            </div>
        @endforeach
{{--        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">--}}
{{--            <div class="position-relative image-hover">--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/travel.jpg')}}"--}}
{{--                    class="img-fluid"--}}
{{--                    alt="world-news"--}}
{{--                />--}}
{{--                <span class="thumb-title">TRAVEL</span>--}}
{{--            </div>--}}
{{--            <h5 class="font-weight-bold mt-3">--}}
{{--                Refugees flood Turkey's border with Greece--}}
{{--            </h5>--}}
{{--            <p class="fs-15 font-weight-normal">--}}
{{--                Lorem Ipsum has been the industry's standard dummy text--}}
{{--            </p>--}}
{{--            <a href="#" class="font-weight-bold text-dark pt-2"--}}
{{--            >Read Article</a--}}
{{--            >--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">--}}
{{--            <div class="position-relative image-hover">--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/news.jpg')}}"--}}
{{--                    class="img-fluid"--}}
{{--                    alt="world-news"--}}
{{--                />--}}
{{--                <span class="thumb-title">NEWS</span>--}}
{{--            </div>--}}
{{--            <h5 class="font-weight-bold mt-3">--}}
{{--                South Korea’s Moon Jae-in sworn in vowing address--}}
{{--            </h5>--}}
{{--            <p class="fs-15 font-weight-normal">--}}
{{--                Lorem Ipsum has been the industry's standard dummy text--}}
{{--            </p>--}}
{{--            <a href="#" class="font-weight-bold text-dark pt-2"--}}
{{--            >Read Article</a--}}
{{--            >--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">--}}
{{--            <div class="position-relative image-hover">--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/art.jpg')}}"--}}
{{--                    class="img-fluid"--}}
{{--                    alt="world-news"--}}
{{--                />--}}
{{--                <span class="thumb-title">ART</span>--}}
{{--            </div>--}}
{{--            <h5 class="font-weight-bold mt-3">--}}
{{--                These puppies are training to assist in avalanche rescue--}}
{{--            </h5>--}}
{{--            <p class="fs-15 font-weight-normal">--}}
{{--                Lorem Ipsum has been the industry's standard dummy text--}}
{{--            </p>--}}
{{--            <a href="#" class="font-weight-bold text-dark pt-2"--}}
{{--            >Read Article</a--}}
{{--            >--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">--}}
{{--            <div class="position-relative image-hover">--}}
{{--                <img--}}
{{--                    src="{{asset('storage/assets/images/dashboard/business.jpg')}}"--}}
{{--                    class="img-fluid"--}}
{{--                    alt="world-news"--}}
{{--                />--}}
{{--                <span class="thumb-title">BUSINESS</span>--}}
{{--            </div>--}}
{{--            <h5 class="font-weight-bold mt-3">--}}
{{--                'Love Is Blind' couple opens up about their first year--}}
{{--            </h5>--}}
{{--            <p class="fs-15 font-weight-normal">--}}
{{--                Lorem Ipsum has been the industry's standard dummy text--}}
{{--            </p>--}}
{{--            <a href="#" class="font-weight-bold text-dark pt-2"--}}
{{--            >Read Article</a--}}
{{--            >--}}
{{--        </div>--}}
    </div>
</div>

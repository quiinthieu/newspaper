<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<div class="col-lg-4">
    @for($i = 0; $i < count($articles); $i += 2)
        <div class="row">
            <div class="col-sm-6">
                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                        <img
                        src="{{asset('storage/assets/images/dashboard/Profile_1.jpg')}}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                        />
                            <span class="fs-12 text-muted">{{$articles[$i]['author']}}</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        {{$articles[$i]['title']}}
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                        <img
                            src="{{asset('storage/assets/images/dashboard/Profile_1.jpg')}}"
                            class="img-xs img-rounded mr-2"
                            alt="thumb"
                        />
                        <span class="fs-12 text-muted">{{$articles[$i + 1]['author']}}</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                        {{$articles[$i + 1]['title']}}
                    </p>
                </div>
            </div>
        </div>
    @endfor
</div>

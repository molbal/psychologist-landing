@extends("layout.app")
{{--@section("browser-title", "All item prices")--}}
@section("content")
    <section class="py-xxl-8 pb-0" id="home">
{{--        <div class="bg-holder bg-size" style="background-image:url('assets/img/gallery/hero-bg.png');background-position:top center;background-size:cover;">--}}
{{--    </div>--}}
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Magamról</h3>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-2">
                <img src="{{asset('assets/img/gallery/profile.jpg')}}" alt="" class="rounded shadow w-100">
            </div>
            <div class="col-sm-12 col-md-9 col-lg-10">
                <div class="fs-1 mb-5 text-base text-justify">{!! $about_me !!}</div>
            </div>
        </div>
        <div class="row min-vh-xxl-25">
            <div class="col-sm-12 mt-5">
                <h3>Publikációim</h3>
            </div>
            @foreach($publications as $publication)
                <div class="col-sm-12 col-lg-4 mb-4">
                    @component('components.publication', ['publication' => $publication]) @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

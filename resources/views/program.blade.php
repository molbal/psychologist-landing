@extends("layout.app")
{{--@section("browser-title", "All item prices")--}}
@section("content")
    <section class="py-xxl-10 pb-0" id="home">
{{--        <div class="bg-holder bg-size" style="background-image:url('assets/img/gallery/hero-bg.png');background-position:top center;background-size:cover;">--}}
{{--    </div>--}}
    <!--/.bg-holder-->

    <div class="container">
        <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">

                <h3 class="fw-light font-base fs-6 fs-xxl-7">{!! $program->name !!}</h3>
                <p class="fs-1 mb-5">{!! $program->description !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection

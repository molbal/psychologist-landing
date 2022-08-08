@extends("layout.app")
{{--@section("browser-title", "All item prices")--}}
@section("content")
    <section class="py-xxl-10 pb-0" id="home">
{{--        <div class="bg-holder bg-size" style="background-image:url('assets/img/gallery/hero-bg.png');background-position:top center;background-size:cover;">--}}
{{--    </div>--}}
    <!--/.bg-holder-->

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mb-3">Szolgáltatások</h3>
            </div>
            @foreach($programs as $program)
                <div class="col-sm-6 col-lg-3 mb-4">
                @component('components.program', ['program' => $program]) @endcomponent
                </div>
            @endforeach
        </div>
        <div class="row  min-vh-xxl-25">
            <div class="col-sm-12 mt-5">
                <h3>Kiket várok?</h3>
            </div>
            <DIV class="fs-1 mb-5 text-base text-justify">{!! $about_guests !!}</DIV>
        </div>
    </div>
</section>
@endsection

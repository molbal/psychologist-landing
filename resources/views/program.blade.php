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
                    <h2>{{$program->name}}</h2>
                </div>
                <div class="col-sm-12 col-md-3">
                    <img class="rounded shadow mb-0" src="assets/img/gallery/{{$program->id}}.jpg" alt="{{$program->name}}" style="width: 100%; height: 400px; object-fit: cover;">
                </div>
                <div class="col-sm-12 col-md-9">

                    <p>{!! $program->description !!}</p>
                </div>
            </div>
            <div class="row min-vh-xxl-25 mb-5">
                <div class="col-sm-12 mt-5">
                    <h3>Publikációk a témában</h3>
                </div>
                @foreach($publications as $publication)
                    <div class="col-sm-12 col-lg-3 mb-4">
                        @component('components.publication', ['publication' => $publication]) @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

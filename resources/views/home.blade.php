@extends("layout.app")
{{--@section("browser-title", "All item prices")--}}
@section("content")
    <section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url('assets/img/gallery/hero-bg.png');background-position:top center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
                <h1 class="fw-light font-base fs-6 fs-xxl-7">{!! $home_title !!}</h1>
                <p class="fs-1 mb-5">{!! $home_subtitle !!}</p>
                <a class="btn btn-lg btn-primary rounded-pill" href="{{route('contact.index')}}" role="button">Időpontfoglalás</a>
            </div>
        </div>
    </div>
</section>

    <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-xxl-4"><img class="w-100 rounded shadow" src="{{\App\Models\Program::first()->getIconUrl()}}" alt="..."></div>
                <div class="col-md-7 col-xxl-8 text-center text-md-start">
                    <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Szolgáltatásaim</h2>
                    <p class="text-light">Az alábbi szolgáltatásaim vehetik igénybe: {{$programs}}</p>
                    <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="{{route('programs.index')}}" role="button">Szolgáltatások</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
{{--                    <div style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;"></div>--}}
                    <!--/.bg-holder-->
                    <h1 class="text-center">Utolsó publikációim</h1>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>

    <section>
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row">
                @foreach($publications as $publication)
                    <div class="col-sm-12 col-lg-4 mb-4">
                        @component('components.publication', ['publication' => $publication]) @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

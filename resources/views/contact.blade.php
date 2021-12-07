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
                    <h3>Kapcsolatfelvétel</h3>
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-3 col-lg-2">--}}
                    <iframe style="width: 100%; height: 400px;" class="w-100 rounded shadow mt-3 mb-5" src="https://maps.google.com/maps?q=Maros%20utca%2040.,%201122%20Budapest&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-9 col-lg-10">--}}
                    <p class="lead">Időpontfoglaláshoz kérem keressenek a {{$contact_phone}} telefonszámon, vagy a {{$contact_email}} e-mail címen.</p>
                </div>
            </div>
        </div>
    </section>
@endsection


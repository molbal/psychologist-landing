@extends("layout.app")
@section("browser-title", "Galéria")
@section("content")
    <section class="py-xxl-8 pb-0" id="home">
    {{--        <div class="bg-holder bg-size" style="background-image:url('assets/img/gallery/hero-bg.png');background-position:top center;background-size:cover;">--}}
    {{--    </div>--}}
    <!--/.bg-holder-->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Galéria</h3>

                </div>
                @foreach($gallery as $image)
                    <x-image :image="$image" />
                @endforeach

                    {!! $gallery->links() !!}
            </div>
        </div>
    </section>
@endsection


@section("scripts")
    <style>
        image-link {
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
        }


        /* This block of CSS adds opacity transition to background */
        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
            opacity: 1;
        }
        .mfp-with-zoom.mfp-ready.mfp-bg {
            opacity: 0.8;
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
        }



        /* padding-bottom and top for image */
        .mfp-no-margins img.mfp-img {
            padding: 0;
        }
        /* position of shadow behind the image */
        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0;
        }
        /* padding for main container */
        .mfp-no-margins .mfp-container {
            padding: 0;
        }



        /* aligns caption to center */
        .mfp-title {
            text-align: center;
            padding: 6px 0;
        }
        .image-source-link {
            color: #DDD;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            console.log('popup');
            console.log($('.image-link'));
            $('.image-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                },
                zoom: {
                    enabled: true
                }
            });
        })
        $(document).ready(function() {

        });
    </script>
@endsection

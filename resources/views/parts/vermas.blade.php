<!--================Single Product Area =================-->
<style>
    .whatsapp {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }

    .whatsapp-icon {
        margin-top: 13px;
    }

    img.zoom {
        /* width: 800px;
    height: 200px; */
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }

    .transition {
        -webkit-transform: scale(1.8);
        -moz-transform: scale(1.8);
        -o-transform: scale(1.8);
        transform: scale(1.8);
    }

    .billing_details h3 {
        color: #FF0000 !important;
        font-size: 22px;
    }



    #titulo {
        width: 100%;
        position: absolute;
        padding: 0px;
        margin: 0px auto;
        text-align: center;
        font-size: 27px;
        color: rgba(255, 255, 255, 1);
        font-family: 'Open Sans', sans-serif;
        z-index: 9999;
        text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
    }

    /* Compatibility styles for frameworks like bootstrap, foundation e.t.c */
    .xzoom-source img,
    .xzoom-preview img,
    .xzoom-lens img {
        display: block;
        max-width: none;
        max-height: none;
        -webkit-transition: none;
        -moz-transition: none;
        -o-transition: none;
        transition: none;
    }

    /* --------------- */

    /* xZoom Styles below */
    .xzoom-container {
        display: inline-block;
    }

    .xzoom-thumbs {
        text-align: center;
        margin-bottom: 10px;
    }

    .xzoom {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
    }

    .xzoom2,
    .xzoom3,
    .xzoom4,
    .xzoom5 {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
    }

    /* Thumbs */
    .xzoom-gallery,
    .xzoom-gallery2,
    .xzoom-gallery3,
    .xzoom-gallery4,
    .xzoom-gallery5 {
        border: 1px solid #cecece;
        margin-left: 5px;
        margin-bottom: 10px;
    }

    .xzoom-source,
    .xzoom-hidden {
        display: block;
        position: static;
        float: none;
        clear: both;
    }

    /* Everything out of border is hidden */
    .xzoom-hidden {
        overflow: hidden;
    }

    /* Preview */
    .xzoom-preview {
        border: 1px solid #888;
        background: #2f4f4f;
        box-shadow: -0px -0px 10px rgba(0, 0, 0, 0.50);
    }

    /* Lens */
    .xzoom-lens {
        border: 1px solid #555;
        box-shadow: -0px -0px 10px rgba(0, 0, 0, 0.50);
        cursor: crosshair;
    }

    /* Loading */
    .xzoom-loading {
        background-position: center center;
        background-repeat: no-repeat;
        border-radius: 100%;
        opacity: .7;
        background: url(../example/images/xloading.gif);
        width: 48px;
        height: 48px;
    }

    /* Additional class that applied to thumb when it is active */
    .xactive {
        -webkit-box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        -moz-box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        border: 1px solid #4aaad2;
    }

    /* Caption */
    .xzoom-caption {
        position: absolute;
        bottom: -43px;
        left: 0;
        background: #000;
        width: 100%;
        text-align: left;
    }

    .xzoom-caption span {
        color: #fff;
        font-family: Arial, sans-serif;
        display: block;
        font-size: 0.75em;
        font-weight: bold;
        padding: 10px;
    }

    /* Compatibility styles for frameworks like bootstrap, foundation e.t.c */
    .xzoom-source img,
    .xzoom-preview img,
    .xzoom-lens img {
        display: block;
        max-width: none;
        max-height: none;
        -webkit-transition: none;
        -moz-transition: none;
        -o-transition: none;
        transition: none;
    }

    /* --------------- */

    /* xZoom Styles below */
    .xzoom-container {
        display: inline-block;
    }

    .xzoom-thumbs {
        text-align: center;
        margin-bottom: 10px;
    }

    .xzoom {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
    }

    .xzoom2,
    .xzoom3,
    .xzoom4,
    .xzoom5 {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
    }

    /* Thumbs */
    .xzoom-gallery,
    .xzoom-gallery2,
    .xzoom-gallery3,
    .xzoom-gallery4,
    .xzoom-gallery5 {
        border: 1px solid #cecece;
        margin-left: 5px;
        margin-bottom: 10px;
    }

    .xzoom-source,
    .xzoom-hidden {
        display: block;
        position: static;
        float: none;
        clear: both;
    }

    /* Everything out of border is hidden */
    .xzoom-hidden {
        overflow: hidden;
    }

    /* Preview */
    .xzoom-preview {
        border: 1px solid #888;
        background: #2f4f4f;
        box-shadow: -0px -0px 10px rgba(0, 0, 0, 0.50);
    }

    /* Lens */
    .xzoom-lens {
        border: 1px solid #555;
        box-shadow: -0px -0px 10px rgba(0, 0, 0, 0.50);
        cursor: crosshair;
    }

    /* Loading */
    .xzoom-loading {
        background-position: center center;
        background-repeat: no-repeat;
        border-radius: 100%;
        opacity: .7;
        background: url(../example/images/xloading.gif);
        width: 48px;
        height: 48px;
    }

    /* Additional class that applied to thumb when it is active */
    .xactive {
        -webkit-box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        -moz-box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        box-shadow: 0px 0px 3px 0px rgba(74, 169, 210, 1);
        border: 1px solid #4aaad2;
    }

    /* Caption */
    .xzoom-caption {
        position: absolute;
        bottom: -43px;
        left: 0;
        background: #000;
        width: 100%;
        text-align: left;
    }

    .xzoom-caption span {
        color: #fff;
        font-family: Arial, sans-serif;
        display: block;
        font-size: 0.75em;
        font-weight: bold;
        padding: 10px;
    }

    h2 {

        color: #616A6B;
    }
</style>


<h2 class="title text-center">{{$repuesto->marca}} {{$repuesto->modelo}}</h2>
<br>
<div class="row">
    <div class="col-lg-6">
        <!-- fancy start -->
        <section id="fancy">
            <div class="row">

                <div class="large-5 column">
                    <div class="xzoom-container">
                        @foreach($repuesto->imagenprincipal as $img)
                        @if ($loop->first)
                        <img class="xzoom" id="xzoom-fancy" src="{{ asset($img->ruta)}}" width="100%" xoriginal="{{ asset($img->ruta)}}" />
                        @endif
                        @endforeach
                        <div class="xzoom-thumbs">
                            @foreach($repuesto->imagenprincipal as $img)
                            <a href="{{ asset($img->ruta)}}">
                                <img class="xzoom-gallery" width="80" src="{{ asset($img->ruta)}}" xpreview="{{ asset($img->ruta)}}">
                            </a>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="large-7 column"></div>
            </div>
        </section>
        <!-- fancy end -->
    </div>


    <div class="col-lg-6" style="padding:15px">
        <div style="font-family:'Courier New'">

            <h3 style="color:#d43100; ">Us$
                <?php echo number_format($repuesto->precio, 0, ',', '.'); ?>
            </h3>
            <h5 style="font-family:'verdana'">Versión: {{$repuesto->version}}</h5>
            <h5 style="color:#7F8C8D; font-family:'verdana'">Año: {{$repuesto->año}}</h5>
            <h5 style="color:#7F8C8D; font-family:'verdana'">Combustible: {{$repuesto->combustible}}</h5>
            <h5 style="color:#7F8C8D; font-family:'verdana'"> <?php echo number_format($repuesto->km, 0, ',', '.'); ?> Km</h5>
            @foreach($repuesto->filtro as $f)
            <h5 style="color:#7F8C8D; font-family:'verdana'"> {{$f->descripcion}}: {{$f->pivot->descripcion}}</h5>
            @endforeach
            <h5 style="color:#7F8C8D; font-family:'verdana'"> {{$repuesto->descripcion}} </h5>
        </div>
    </div>

    <a href="https://wa.me/543454947777" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                tint: '#333',
                Xoffset: 15
            });


            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 400,
                title: true,
                tint: '#333',
                Xoffset: 15
            });
            $('.xzoom2, .xzoom-gallery2').xzoom({
                position: '#xzoom2-id',
                tint: '#ffa200'
            });
            $('.xzoom3, .xzoom-gallery3').xzoom({
                position: 'lens',
                lensShape: 'circle',
                sourceClass: 'xzoom-hidden'
            });
            $('.xzoom4, .xzoom-gallery4').xzoom({
                tint: '#006699',
                Xoffset: 15
            });
            $('.xzoom5, .xzoom-gallery5').xzoom({
                tint: '#006699',
                Xoffset: 15
            });

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom, .xzoom2, .xzoom3').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        xzoom.eventleave = function(element) {
                            element.hammer().on('tap', function(event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom4').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openfancy, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = {
                                        src: gallery[i]
                                    };
                                }
                                $.magnificPopup.open({
                                    items: images,
                                    type: 'image',
                                    gallery: {
                                        enabled: true
                                    }
                                });
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

            } else {
                //If not touch device

                //Integration with fancybox plugin
                $('#xzoom-fancy').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    $.fancybox.open(xzoom.gallery().cgallery, {
                        padding: 0,
                        helpers: {
                            overlay: {
                                locked: false
                            }
                        }
                    });
                    event.preventDefault();
                });

                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = {
                            src: gallery[i]
                        };
                    }
                    $.magnificPopup.open({
                        items: images,
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                    event.preventDefault();
                });
            }
        });
    </script>
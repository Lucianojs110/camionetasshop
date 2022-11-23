<style>
    .header_area .navbar .nav .nav-item {
        margin-right: 20px;
    }

    #buscador {
        display: block;
        padding-left: 0px !important;
    }

    @import "compass/css3";


    .flexsearch--wrapper {
        height: auto;
        width: auto;
        max-width: 100%;
        overflow: hidden;
        background: transparent;
        margin: 0;
        position: static;
    }

    .flexsearch--form {
        overflow: hidden;
        position: relative;
    }

    .flexsearch--input-wrapper {
        padding: 0 66px 0 0;
        /* Right padding for submit button width */
        overflow: hidden;
    }

    .flexsearch--input {
        width: 100%;
    }

    /***********************
 * Configurable Styles *
 ***********************/


    .flexsearch--input {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        height: 30px;
        padding: 0 46px 0 10px;
        border-color: #888;
        border-radius: 15px;
        /* (height/2) + border-width */
        border-style: solid;
        border-width: 2px;
        margin-top: 5px;
        color: #333;
        font-family: 'Helvetica', sans-serif;
        font-size: 18px;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    .flexsearch--submit {
        position: absolute;
        right: 0;
        top: 0;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        border: none;
        margin-top: 13px;
        /* margin-top + border-width */
        margin-right: 13px;
        /* border-width */
        background: transparent;
        color: #888;
        font-family: 'Helvetica', sans-serif;
        font-size: 15px;
        line-height: 20px;
    }

    .flexsearch--input:focus {
        outline: none;
        border-color: #db3300;
    }

    .flexsearch--input:focus.flexsearch--submit {
        color: #333;
    }

    .flexsearch--submit:hover {
        color: #333;
        cursor: pointer;
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    input:-moz-placeholder {
        color: #888
    }

    .btn-search {
        background-color: Transparent;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
        overflow: hidden;
        font-size: 25px;
    }

    #btn-buscador {
        display: none;

    }

    @media screen and (max-width: 1000px) {

        #buscador {
            display: none;

        }

        #btn-buscador {
            display: block;

        }


    }
</style>
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{asset('karma/img/logo.png')}}" width="200" height="70"></a>
                <button type="button" class="btn-search" id="btn-buscador" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-search"></i>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item" id="buscador">

                            <div class="flexsearch">
                                <div class="flexsearch--wrapper">
                                    <div class="flexsearch--form">
                                        <div class="flexsearch--input-wrapper">
                                            <input class="flexsearch--input" autocomplete="off" type="search" name="parametro" id="parametro" placeholder="Buscar">
                                        </div>

                                        <input class="flexsearch--submit" id="btn-search" type="submit" value="&#10140;" />
                                    </div>
                                </div>
                            </div>


                        </li>

                        
                        <li class="nav-item"><a class="nav-link" href="contact.html" style="color:#db3300">Nosotros</a></li>
                        <li class="nav-item submenu dropdown">


                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @include('parts.notificaciones')



                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="flexsearch">
                    <div class="flexsearch--wrapper">
                        <div class="flexsearch--form">
                            <div class="flexsearch--input-wrapper">
                                <input class="flexsearch--input"  autocomplete="off" type="search" name="parametro2" id="parametro2" placeholder="Buscar">
                            </div>

                            <input class="flexsearch--submit" onclick="buscar2()" type="submit" value="&#10140;" />
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>

            </div>
        </div>
    </div>
</div>

<!-- End Header Area -->

<script>
    var input = document.getElementById("parametro");

    input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            event.preventDefault();
            buscar()
        }
    });

    var input2 = document.getElementById("parametro2");

    input2.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            event.preventDefault();
            buscar2()
        }
    });



    $(document).ready(function() {
        $("#btn-search").click(function() {

            buscar()
        });

    });


    function buscar() {


        if ($("#parametro").val()) {
            var text = $("#parametro").val();
        } else {
            text = 'all'
        }


        var url = '{{ url("buscador/:id") }}'
        url2 = url.replace(':id', text);

        window.location.href = url2;

    }

    function buscar2() {


        if ($("#parametro2").val()) {
            var text = $("#parametro2").val();
        } else {
            text = 'all'
        }


        var url = '{{ url("buscador/:id") }}'
        url2 = url.replace(':id', text);

        window.location.href = url2;

    }
</script>
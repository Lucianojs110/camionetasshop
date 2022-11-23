@extends('layouts.masterecom')
@section('contenido')

<style>
    #prod {
        margin-top: 140px;
    }

    #buscador2 {
        display: none;

    }

    @media screen and (max-width: 600px) {

        #prod {
            margin-top: 80px;
        }

        #buscador2 {
            display: block;
            margin-top: 140px;
        }

        p {

            padding-top: 30px;
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


        .flexsearch {
            padding: 0 20px 0 20px;
            /* Padding for other horizontal elements */
        }

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

    }

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
</style>
<section>
    <div class="container">
        @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        </div>
        @endif

        <div class="col-sm-12  padding-right" id="prod">

            @include('parts.productos')
        </div>
        <a href="https://wa.me/543454931828" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    </div>
</section>


@endsection
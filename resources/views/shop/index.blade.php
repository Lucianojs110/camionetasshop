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
            margin-top: 40px;
        }

        #buscador2 {
            display: block;
            margin-top: 140px;
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

        <div class="row" id="buscador2">
            <div class="col-lg-12">
                <form method="post" action="{{ URL::route('busca') }}">
                    @csrf
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Buscar" name="texto" aria-label="" aria-describedby="basic-addon2" size="35">
                        <div class="input-group-append">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="col-sm-12  padding-right" id="prod">

            @include('parts.productos')
        </div>
        <a href="https://wa.me/543454947777" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    </div>
</section>


@endsection
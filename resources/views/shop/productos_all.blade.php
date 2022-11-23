@extends('layouts.masterecom')

@section('title','Productos')

@section('contenido')

<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        margin-top: 10px;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    .texto-encima {
        position: absolute;
        top: 0px;
        left: 0px;
        color: white;
        background-color: #f1663e;
        padding: 5px;
        font-size: 13px;
    }

    .pagination a{

        line-height: 18px;
    }
    .pagination {

line-height: 20px;
}

.page-item.active .page-link{

    background-color: #f1663e;
    border-color: #f1663e;
}

.page-link{
    color: #495057;

}

 

   
@media screen and (max-width: 600px) {

.card-img-top {
width: 100%;
height: 100%;

}

}
</style>

<section>
    <div class="container">

        <div class="row" style="margin-top:140px">
            @foreach($products as $p)

            <div class="col-lg-3 col-md-6">
                <a href="{{ URL::action('ProductosController@show', $p->id_vehiculo) }}" class="social-info">
                    <div class="card">
                        @foreach ($p->imagenprincipal as $img)
                        @if ($loop->first)
                        <div class="imagen">
                            <img class="card-img-top" img src="{{ asset($img->ruta)}}" height="100%" width="100%" alt="" />
                            @if($p->envio == "1")
                            <div class="texto-encima">Envío Gratis</div>
                            @endif
                        </div>
                        @endif
                        @endforeach
                        <div class="card-body">
                            <h3 style="color:#d43100; ">
                            @if($p->moneda=='Pesos')
								ARS$
							@else
								Us$
							@endif
                                <?php echo number_format($p->precio, 0, ',', '.'); ?>
                            </h3>
                            <h6>{{$p->marca}} {{$p->modelo}} </h6>
                            <h6>{{$p->version}} | {{$p->año}} </h6>
                        </div>
                    </div>
                </a>

            </div>

            @endforeach
        </div>


        

        <div class="d-flex justify-content-center">
            {!! $products->links() !!}
        </div>

<br>

    </div>
</section>
@endsection

<script>
    $('.').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
@extends('layouts.masterecom')
@section('contenido')
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


        <div class="col-sm-12 padding-right">
            <div class="features_items">{{-- Ultimos productos --}}
                <h2 class="title text-center">Carrito de Compras</h2>
                {{-- @include('parts.notificaciones') --}}
                @include('parts.comprascarrito')
                
            </div>{{-- ./Ultimos productos --}}
        </div>

    </div>
</section>

@endsection
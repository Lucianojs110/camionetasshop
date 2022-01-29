@extends('layouts.masterecom')

@section('title','Productos')

@section('contenido')

<section>
    <div class="container">
        <div class="row">
        
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                  
                    @include('parts.productos')
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.masterecom')

@section('title','Productos')

@section('contentenido')

<section>
    <div class="container">
        <div class="row">
        
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                  
                    @include('parts.productos')
                    
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
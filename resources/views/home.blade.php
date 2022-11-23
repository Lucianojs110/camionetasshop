@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">  {{ __('Bienvenido') }}
                    
                    {{Auth::user()->name}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          
                  

                    <div class="fadeIn first" style=" text-align: center;">
        <img src="{{asset('karma/img/logo2.png')}}" href="/shop" alt="" class="hidden-md-up" width="200" height="200" />
        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.masterecom')
@section('contenido')
<style>
	#buscador2 {
		display: none;
	}

	@media screen and (max-width: 600px) {



		#buscador2 {
			display: block;
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

	h2 {

		color: #616A6B;
	}

	@media screen and (max-width: 600px) {

		.card-img-top {
			width: 100%;
			height: 100%;

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
</style>
<section>
	<div class="container" style="margin-top:150px">
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
			<div class="features_items">
				<h2 class="title text-center">Busqueda de Vehículos</h2>
				<br>
				@if($vehiculos->isEmpty())
				<br>
				<br>
				<h3>
					<p align="center">No se encontraron resultados en su busqueda</p>
				</h3>
				@else
				<div class="row">
					<!-- single product -->
					@foreach($vehiculos as $p)
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
									<h3 style="color:#d43100; ">Us$
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
			</div>
		</div>
		@endif
	</div>
	<br>
	<a href="https://wa.me/543454931828" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
	</div>
</section>



@endsection
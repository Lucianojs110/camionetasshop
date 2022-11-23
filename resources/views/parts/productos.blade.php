<style>
	@import url("https://fonts.googleapis.com/css?family=Mukta:700");

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

	#container-prod {

		margin-top: 50px;

	}

	.ver-mas {
		margin: auto;
		margin-top: 20px;
		text-decoration: none;
		display: inline-block;
		width: 200px;
		height: 50px;
		text-align: center;
		position: relative;
		transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
	}

	.ver-mas div {
		position: absolute;
		background-color: #d24e25;
		height: 100%;
		width: 50px;
		border-radius: 25px;
		transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
	}

	.ver-mas div span {
		display: block;
		position: absolute;
		top: calc(50% - 1px);
		left: 8px;
		height: 2px;
		width: 0px;
		background-color: #fff;
		transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
	}

	.ver-mas div span::before {
		display: block;
		content: "";
		height: 2px;
		width: 10px;
		background-color: #fff;
		position: absolute;
		top: -3px;
		left: 13px;
		transform: rotate(45deg);
	}

	.ver-mas div span::after {
		display: block;
		content: "";
		height: 2px;
		width: 10px;
		background-color: #fff;
		position: absolute;
		top: 3px;
		left: 13px;
		transform: rotate(-45deg);
	}

	.ver-mas:hover div {
		width: 100%;
	}

	.ver-mas:hover div span {
		left: 25%;
		width: 20px;
	}

	.ver-mas p {
		font-family: 'Mukta', sans-serif;
		position: absolute;
		top: 25%;
		left: calc(50% - 13.5px);
		z-index: 1;
		color: #333;
		transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
	}

	.ver-mas:hover p {
		color: #fff;
		position: absolute;
		

	}



	@media screen and (max-width: 600px) {

		.card-img-top {
			width: 100%;
			height: 100%;

		}

		#container-prod {

			margin-top: 60px;
		}

		.ver-mas p {
		font-family: 'Mukta', sans-serif;
		position: absolute;
		top: -30%;
		left: calc(50% - 13.5px);
		z-index: 1;
		color: #333;
		transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
	}

		.ver-mas:hover p {
		color: #fff;
		position: absolute;
		top: -30%;

	}



	}
</style>

<section class="owl-carousel active-product-area section_gap" style="padding-top:0px !important;">

	@foreach($categorias as $cat)
	<div class="single-product-slider @if($loop->first) active @endif">
		<div class="container" id="container-prod">
			<p align=center style="font-size:30px; color:#db3300">{{ $cat->nombre}}</p>
			<br><br><br><br><br><br>
			<div class="row">
				<!-- single product -->
				@foreach($cat->vehiculos as $p)

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
			<div class="row">
			<a href="{{ URL::action('ProductosController@productos_all') }}" class="ver-mas">
					<div>
						<span></span>
					</div>
					<p>Ver más</p>
				</a>
			</div>		
		</div>
	</div>
	@endforeach
</section>

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
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

	.texto-encima{
    position: absolute;
    top: 0px;
    left: 0px;
	color: white;
	background-color: #f1663e;
	padding: 5px;
	font-size: 13px;
}

	@media screen and (max-width: 600px) {

		.card-img-top {
			width: 100%;
			height: 100%;

		}

	}
</style>

<section class="owl-carousel active-product-area section_gap">

	@foreach($categorias as $cat)
	<div class="single-product-slider @if($loop->first) active @endif">
		<div class="container">
			<p align=center style="font-size:30px; color:#db3300">{{ $cat->nombre}}</p>
			<div class="row" style="margin-top:60px">
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
									<h3 style="color:#d43100; ">Us$
										<?php echo number_format($p->precio, 0, ',', '.'); ?>
									</h3>
									<h6>{{$p->marca}} {{$p->modelo}}  </h6>
									<h6>{{$p->version}} | {{$p->año}} </h6>
								</div>
							</div>
						</a>
					
				</div>

				@endforeach
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
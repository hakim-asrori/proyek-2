@extends('template')

@section('title', 'Task')

@section('content')

<!-- Iklan -->
<div class="container">
	<div class="card mt-5" style="background-color: #005073;">
		<div class="card-body">
			<h5 class="card-title text-white">Rekomendasi untuk anda!</h5>
			
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="" class="d-block w-100" alt="..." height="200">
					</div>
					<?php
					for ($i = 2; $i <= 5; $i++) { ?>
						<div class="carousel-item">
							<a href="">
								<img src="" class="d-block w-100" alt="..." height="200">
							</a>
						</div>
						<?php 
					}
					?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

		</div>
	</div>
</div>
<!-- Akhir Iklan -->

<!-- Produk -->
<div class="container mt-5">
	<div class="row">
		@include('barang.kendaraan')
	</div>
	<div class="text-center">
		<button class="btn btn-primary">Muat lainnya</button>
	</div>
</div>
<!-- Akhir Produk -->

@endsection()
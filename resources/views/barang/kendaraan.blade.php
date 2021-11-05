<hr>
<h3 class="my-3">Kendaraan Lainnya</h3>
<div class="row">
	<?php foreach ($barang as $b) { ?>
		<div class="col-md-4 col-lg-3 col-sm-6 mb-3">
			<a href="" class="text-decoration-none text-dark">
				<div class="card shadow-sm">
					<div class="_card-body">
						<img src="/assets/images/xenia.png" alt="">
						<div class="_card-text">
							<p class="font-weight-bold ml-3 mt-2 h5 text-primary">{!! $b->nama_barang !!}</p>
							<p class="ml-3 my-0">RP. {!! $b->harga !!}</p>
							<span class="badge btn-success">Tersedia</span>
							<span class="d-flex justify-content-end small">20 Oktober 2021</span>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?php } ?>
</div>
@extends('template')

@section('content')

<div class="container mt-3">
	<h3 class="mb-3">Tambah Kendaraan</h3>
	<div class="card">
		<div class="card-body">
			<form method="post" action="/kendaraan" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg">
						<div class="form-group mb-3">
							<label>Nama Kendaraan</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg mb-3">
									<label>Harga</label>
									<input type="text" name="harga" class="form-control">
								</div>
								<div class="col-lg mb-3">
									<label>Per</label>
									<select name="per" class="form-control">
										<option value="Jam">Jam</option>
										<option value="Hari">Hari</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group mb-3">
							<label>Plat Nomer</label>
							<input type="text" name="no_plat" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Keterangan</label>
							<textarea name="keterangan" class="form-control" rows="4"></textarea>
						</div>
						<input id="default-btn" type="file" hidden>
					</div>
					<div class="col-lg">
						<div class="form-group mb-3">
							<label>Upload Gambar</label>
							<div class="wrapImg">
								<div class="image">
									<img src="">
								</div>
								<div class="content">
									<div class="icon">
										<i class="fas fa-cloud-upload-alt"></i>
									</div>
									<div class="text">
										No file chosen, yet!
									</div>
								</div>
								<div class="file-name">
									File name here
								</div>
								<input class="file-input" type="file" name="file" hidden>
							</div>
						</div>
						<button class="btn btn-primary form-control">Tambah</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	@include('barang.kendaraan')
</div>

@endsection()
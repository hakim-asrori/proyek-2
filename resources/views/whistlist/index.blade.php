@extends('template')

@section('content')

<div class="container mt-3">
	<h3 class="mb-3">Whistlist</h3>
	
	<div class="card">
		<div class="card-body">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Nama Mobil</th>
					<th scope="col">Harga</th>
					<th scope="col">Pemilik Mobil</th>
					<th scope="col">No Telepon</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Xenia</th>
					<td>RP.800.000</td>
					<td>Widianto</td>
					<td>082320824331</td>
					<td><button type="button" class="btn btn-danger">Hapus</button></td>

				</tr>
				<tr>
				<th scope="row">Ertiga</th>
				<td>Rp.800.000</td>
				<td>Widianto</td>
				<td>082320824331</td>
				<td><button type="button" class="btn btn-danger">Hapus</button></td>
				</tr>
				<tr>
				<th scope="row">Avanza</th>
				<td >Rp.800.000</td>
				<td>Widianto</td>
				<td>082320824331</td>
				<td><button type="button" class="btn btn-danger">Hapus</button></td>
				</tr>
			</tbody>
	
			</table>
		</div>
	</div>
</div>

@endsection()
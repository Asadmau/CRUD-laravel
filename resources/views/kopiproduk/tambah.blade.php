@extends('layout/main')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
						
			<div class="card-body">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br />
				@endif
				<form action="{{route('kopiproduk.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="kode_produk">kode produk</label>
						<input type="text" class="form-control" id="kode_produk" name="kode_produk"/>
					</div>
					<div class="form-group">
						<label for="kode_dbr">kode dbr</label>
						<input type="number" class="form-control" id="kode_dbr" name="kode_dbr"/>
					</div>
					<div class="form-group">
						<label for="kode_dbl">kode dbl</label>
						<input type="number" class="form-control" id="kode_dbl" name="kode_dbl"/>
					</div>
					<div class="form-group">
						<label for="kode_ruang">kode ruang</label>
						<input type="number" class="form-control" id="kode_ruang" name="kode_ruang"/>
					</div>
					<div class="form-group">
						<label for="kode_unit">kode unit</label>
						<input type="number" class="form-control" id="kode_unit" name="kode_unit"/>
					</div>
					<div class="form-group">
						<label for="kode_kondisi">kode kondisi</label>
						<input type="number" class="form-control" id="kode_kondisi" name="kode_kondisi"/>
					</div>
					<div class="form-group">
						<label for="tgl_perolehan">Tanggal Perolehan</label>
						<input type="number" class="form-control" id="tgl_perolehan" name="tgl_perolehan"/>
					</div>
					<div class="form-group">
						<label for="thpengadaan">Tahun Pengadaan</label>
						<input type="date" class="form-control" id="thpengadaan" name="thpengadaan"/>
					</div>
					<div class="form-group">
						<label for="nama_pengadaan">Nama Pengadaan</label>
						<input type="text" class="form-control" id="nama_pengadaan" name="nama_pengadaan"/>
					</div>
					<div class="form-group">
						<label for="tgl_pembuka">Tanggal Pembuka</label>
						<input type="number" class="form-control" id="tgl_pembuka" name="tgl_pembuka"/>
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="number" class="form-control" id="harga" name="harga"  step="any"/>
					</div>
					<div class="form-group">
						<label for="ketproduk">Keterangan</label>
						<textarea rows="5" columns="5" class="form-control" id="ketproduk" name="ketproduk"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection
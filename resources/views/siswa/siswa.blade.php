@extends('layout/main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="container">
		<center>
			<h4>Import Excel Ke Database Dengan Laravel</h4>
	
		</center>
 
		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			TAMBAH
		</button>
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="POST" action="/siswa/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							@csrf
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
 
		
		{{-- <a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}
 
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Akun</th>
					<th> Kode Barang</th>
					<th>NUP</th>
					<th>Nama Barang</th>
					<th>Merk</th>
					<th>Tgl Perolehan</th>
					<th>harga perolehan</th>
					<th>Kode Ruangan</th>
					<th>DBR</th>
					<th>DBL</th>
					<th>Kondisi</th>
					<th>Keterangan</th>
					<th>Tahun Pengadaan</th>
					<th>Nama Pengadaan</th>
					<th>Unit Penanggung jawab</th>
					<th>QTY</th>
					<th>Tgl Pembukuan </th>
					<th>Harga</th>
					<th>Nama Barang 1</th>
					<th>Spesifikasi 1</th>
					<th>status</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($produk as $item)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{$item->kd_akun}}</td>
					<td>{{$item->kd_barang}}</td>
					<td>{{$item->nub}}</td>
					<td>{{$item->nama_barang}}</td>
					<td>{{$item->merk}}</td>
					<td>{{$item->tgl_perolehan}}</td>
					<td>{{$item->hrg_perolehan}}</td>
					<td>{{$item->kd_ruangan}}</td>
					<td>{{$item->dbr}}</td>
					<td>{{$item->dbl}}</td>
					<td>{{$item->kondisi}}</td>
					<td>{{$item->keterangan}}</td>
					<td>{{$item->th_pengadaan}}</td>
					<td>{{$item->nm_pengadaan}}</td>
					<td>{{$item->unit_png_jawab}}</td>
					<td>{{$item->qyt}}</td>
					<td>{{$item->tgl_pembukaan}}</td>
					<td>{{$item->harga}}</td>
					<td>{{$item->nm_barang1}}</td>
					<td>{{$item->spesifikasi}}</td>
					<td>{{$item->status}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
			</div>
		</div>
	</div>
@endsection
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
				<form action="{{route('ruang.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nama_ruang">Nama ruang</label>
						<input type="text" class="form-control" id="nama_ruang" name="nama_ruang"/>
					</div>
					<div class="form-group">
						<label for="ketruang">Keterangan</label>
						<textarea rows="5" columns="5" class="form-control" id="ketruang" name="ketruang"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection
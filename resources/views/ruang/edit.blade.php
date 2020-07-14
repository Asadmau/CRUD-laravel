@extends('layout/main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="card uper">
  <div class="card-header">
    Edit  Data
  </div>
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
      <form method="POST" action="{{ route('ruang.update', $dbbarang->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nama_ruang">Nama ruang</label>
              <input type="text" class="form-control" name="nama_ruang" value="{{ $dbbarang->nama_ruang }}"/>
          </div>
          <div class="form-group">
              <label for="ketruang">Keterangan</label>
              <textarea rows="5" columns="5" class="form-control" name="ketruang">{{ $dbbarang->ketruang }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
      </form>
  </div>
</div>
			</div>
		</div>
	</div>
@endsection
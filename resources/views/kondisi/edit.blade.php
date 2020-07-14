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
      <form method="POST" action="{{ route('kondisi.update', $dbbarang->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nama_kondisi">Nama kondisi</label>
              <input type="text" class="form-control" name="nama_kondisi" value="{{ $dbbarang->nama_kondisi }}"/>
          </div>
          <div class="form-group">
              <label for="ketkondisi">Keterangan</label>
              <textarea rows="5" columns="5" class="form-control" name="ketkondisi">{{ $dbbarang->ketkondisi }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
      </form>
  </div>
</div>
			</div>
		</div>
	</div>
@endsection
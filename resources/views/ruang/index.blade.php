@extends('layout.main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                <h1>ruang</h1>
                
		<a href="{{route('ruang.create')}}" class="btn btn-info btn-sm"> Tambah Data</a>
		<table id="data_table_subkategori" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
              
				<td>No</td>
				<td>Nama ruang</td>
				<td>Keterangan</td>
				<td>Aksi</td>
    
            </tr>
        </thead>
        <tbody>
            @foreach($dbbarang as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama_ruang}}</td>
            <td>{{$item->ketruang}}</td>
            <td><a href="{{ route('ruang.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('ruang.destroy', $item->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
            
    </table>
     
			</div>
		</div>
	</div>
	
	 
@endsection
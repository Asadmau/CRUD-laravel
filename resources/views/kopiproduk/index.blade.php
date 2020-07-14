@extends('layout.main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                <h1>Kopi produk</h1>
                
		<a href="{{route('kopiproduk.create')}}" class="btn btn-info btn-sm"> Tambah Data</a>
		<table id="data_table_subkategori" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>kode_produk</th>
				<th>kode_dbr</th>
				<th>kode_dbl</th>
				<th>kode_unit</th>
				<th>kode_kondisi</th>
				<th>kode_ruang</th>
				<th>tgl_perolehan</th>
				<th>thpengadaan</th>
				<th>ketproduk</th>
				<th>nama_pengadaan</th>
				<th>tgl_pembuka</th>
				<th>harga</th>
				<th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dbbarang as $item)
            <tr>
                    <td>{{ $loop->iteration }}</td>
					<td>{{$item->kode_produk}} </td>
					<td>{{$item->kode_dbr}} </td>
					<td>{{$item->kode_dbl}} </td>
					<td>{{$item->kode_unit}} </td>
					<td>{{$item->kode_kondisi}} </td>
					<td>{{$item->kode_ruang}} </td>
					<td>{{$item->tgl_perolehan}}</td>
					<td>{{$item->thpengadaan}} </td>
					<td>{{$item->ketproduk}} </td>
					<td>{{$item->nama_pengadaan}} </td>
					<td>{{$item->tgl_pembuka}} </td>
					<td>{{$item->harga}}</td>
                    <td>	
						<form action="{{route('kopiproduk.destroy',$item->id)}}" method="POST">
							@method("DELETE")
                            @csrf
                           
							<button type="submit" value="DELETE" class="btn btn-danger">delete</button>
							
						</form>
						<a href="{{route('kopiproduk.edit', $item->id)}}" class="btn btn-info btn-sm" >edit</a>
					</td>
                </tr>
            @endforeach
            
    </table>
     
			</div>
		</div>
	</div>
	
	 
@endsection
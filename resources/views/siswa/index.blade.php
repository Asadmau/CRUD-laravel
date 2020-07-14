@extends('layout/main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
			<a href="{{route('gambar.create')}}">tambah</a>
				<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>gambar</th>
					
				</tr>
			</thead>
			<tbody>
				
				@foreach($produk as $item)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{$item->gambar}}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
			</div>
		</div>
	</div>
@endsection
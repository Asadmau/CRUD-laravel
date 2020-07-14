@extends('layout/main')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1>cek gambar</h1>
				<form action="{{url('siswa.uploud')}}" method="POST">
					@csrf
					<input type="file" name="gambar" id="gambar">
					<button type="submit">uploud</button>
				</form>
			</div>
		</div>
	</div>
@endsection
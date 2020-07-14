{{-- 
<div class="row">
	<div class="col-lg-6">
		<div class="form-group focused">
			<label class="form-control-label" for="gambar">Foto Produk</label>
			<input type="file" class="form-control-file" id="gambar" name="gambar">

				@error('gambar')
					<h5 class="text-danger ml-2 mt-1"> {{ $message }} </h5>
				@enderror
		</div>
	</div>
	<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card text-center ">
              <i style="" class="fas fa-shopping-bag fa-10x pt-5 pb-5"></i>
              <img style="display: none" class="img-thumbnail img-fluid" src="" alt="Card image cap">
          </div>
	  </div>
	</div>

		
		</div>
	</div>
<script>
	const inpFile  = document.getElementById('gambar');
		const imageSrc = document.querySelector('.row .col-xl-4 .card img.img-thumbnail');
		const profileDefault = document.querySelector('.row .col-xl-4 .card i');

		inpFile.addEventListener('change', function() {
			const file = this.files[0];
			if(file) {
      			const reader = new FileReader()

      			profileDefault.style.display = "none"
      			imageSrc.style.display = "block"

      			reader.addEventListener("load", function() {
      				imageSrc.setAttribute('src', this.result)
      			})

      			reader.readAsDataURL(file)
			}
		})
</script>  --}}


@extends('layout/main')


@section('container')
	<div class="container">
			<div class="col-10">
				<h5>Tambah Data</h5>
<form action="{{route('produk.store')}}" method="POST">
	@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="name">Produk name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nama">
		</div>
		<div class="form-group col-md-6">
			<label for="original_price">Original Price</label>
			<input type="text" class="form-control" id="original_price" name="original_price" placeholder="Original Price">
		</div>
	</div>
 <div class="form-row">
		<div class="form-group col-md-6">
			<label for="cat_id">Select Category Name</label>
			<select id="cat_id" name="cat_id" class="form-control">
				<option value="">- Select Category Name -</option>
				<option value="Aplikasi">Aplikasi</option>
				<option value="OS">OS</option>
				<option value="Pengusaha">Pengusaha</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="shipping_cost">Shipping Cons</label>
			<input type="text" class="form-control" id="shipping_cost" name="shipping_cost" placeholder="Shipping Cons">
		</div>
	</div>
<div class="form-row">
		<div class="form-group col-md-6">
			<label for="sup_cat_id">Select Sub Category</label>
			<select id="sup_cat_id" name="sub_cat_id" class="form-control">
				<option value="">-Select Sub Category-</option>
				<option value="Aplikasi">Aplikasi</option>
				<option value="OS">OS</option>
				<option value="Pengusaha">Pengusaha</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="minimum_order">Minimum Order</label>
			<input type="text" class="form-control" id="minimum_order" name="minimum_order" placeholder="Minimum Order">
		</div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="higlight_information">Product Highlight Information</label>
		<textarea class="form-control" name="higlight_information" id="higlight_information" rows="3"  placeholder="Product Highlight Information">
		</textarea>
	</div>
	<div class="form-group col-md-6">
			<label for="product_unit"> Product Unit</label>
			<input type="text" class="form-control" id="product_unit" name="product_unit" placeholder=" Product Unit">
		
	</div>
</div>
<div class="form-row">
		<div class="form-group col-md-6">
			<label for="code">code</label>
			<input type="text" class="form-control" id="code" name="code" placeholder="code">
		</div>
		<div class="form-group col-md-6">
			<label for="search_tag">Search Tag/Keyword</label>
			<input type="text" class="form-control" id="search_tag" name="search_tag" placeholder="Search Tag/Keyword">
		</div>
	</div>
<div class="form-row margin-top">
	<div class="form-group col-md-6">
		<label for="description">Product Description</label>
			<textarea class="form-control" id="description" rows="3" name="description"  placeholder="Product Description">
		</textarea>
	</div>
	<div class="form-column">
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured">
			<label class="custom-control-label" for="is_featured" >Is Featured?</label>
		</div>
	
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="is_available" name="is_available">
			<label class="custom-control-label" for="is_available">Is Available?</label>
		</div>
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="status" name="status">
			<label class="custom-control-label" for="status">Status(Is Publish?)</label>
		</div>		
	</div>
</div>
	<button type="submit" class="btn btn-primary">Tombol</button>
</form>

@endsection
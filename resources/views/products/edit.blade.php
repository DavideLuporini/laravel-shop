@extends('layouts.main')

@section('content')
<form class="container" action="{{route('products.update', $product->id)}}" method="POST">
	@csrf
	@method('PUT')
	<div class="row">
		<div class="col-6">
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
			</div>
		</div>
		<div class="col-6">
			<div class="mb-3">
				<label for="image" class="form-label">Thumbnail</label>
				<input type="url" class="form-control" id="image" name="image" value="{{$product->image}}">
			</div>
		</div>
		<div class="col-6">
			<div class="mb-3">
				<label for="price" class="form-label">Price</label>
				<input type="number" step="any" class="form-control" id="price" name="price" value="{{$product->price}}">
			</div>
		</div>
		<div class="col-12">
			<div class="mb-3">
				<label for="description" class="form-label">Description</label>
				<textarea type="text" class="form-control" id="description" name="description" cols="30" rows="3">{{$product->description}}</textarea>
			</div>
		</div>
		<div class="col-12 text-center">
			<button type="reset" class="btn btn-danger">Clear</button>
			<button type="submit" class="btn btn-success ms-3">Submit</button>
		</div>
	</div>
</form>
@endsection
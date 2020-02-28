@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Types</h2>
	
	


	<div class="row">
		<div class="col-md-12">
		<form action="{{route('types.update',$type->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
	<label for="name">Name</label>
	<input type="text" name="name" value="{{$type->name}}"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<label for="seat">Seat</label>
	<input type="number" name="seat" value="{{$type->seat}}"><br>
	@if ($errors->has('seat'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('seat') }}</strong></span>
	@endif
	<label for="price">Price</label>
	<input type="number" name="price" value="{{$type->price}}"><br>
	@if ($errors->has('price'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('price') }}</strong></span>
	@endif
	<button type="submit">update</button>
	
	</form>
</div>
</div>
</div>
	
@endsection
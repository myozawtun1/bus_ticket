@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Cities</h2>
	
	


	<div class="row">
		<div class="col-md-12">
		<form action="{{route('cities.update',$city->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
	<label for="name">Name</label>
	<input type="text" name="name" value="{{$city->name}}"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<button type="submit">update</button>
	
	</form>
</div>
</div>
</div>
	
@endsection
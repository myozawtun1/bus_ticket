@extends('backendtemplate')
@section('content')

<form action="{{route('cities.store')}}" method="post" enctype="multipart/form-data">
	
	@csrf
	<label for="name">Name</label>
	<input type="text" name="name"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif <br>
	<button type="submit">save</button>
</form>

@endsection
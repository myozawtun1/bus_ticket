@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	

<h2>Show with form/old value</h2>
	<div class="row">
		<div class="col-md-12">
		<form action="{{route('customers.update',$customer->id)}}" method="post">
	@csrf
	@method('PUT') 
	<label for="name">Name</label>
	<input type="text" name="name" value="{{$customer->name}}"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<br>
	
	
	<label for="email">Email</label>
	<textarea name="email">{{$customer->email}}</textarea><br>
	@if ($errors->has('email'))
	<span class="help-block text-danger"><strong>{{ $errors->first('email') }}</strong></span>
	@endif
	<br>
	<label for="phone">Phone</label>
	<input type="num" name="phone" value="{{$customer->phone}}"><br>
	@if ($errors->has('phone'))
	<span class="help-block text-danger"><strong>{{ $errors->first('phone') }}</strong></span>
	@endif
	<br>
	<label for="address">Address</label>
	<input type="text" name="address" value="{{$customer->address}}"><br>
	@if ($errors->has('address'))
	<span class="help-block text-danger"><strong>{{ $errors->first('address') }}</strong></span>
	@endif
	<br>
	
	
	<!-- <input type="submit" name="save" value=""><br> -->
	<button type="submit">update</button>
</form>
		</div>
	</div>
</div>

@endsection
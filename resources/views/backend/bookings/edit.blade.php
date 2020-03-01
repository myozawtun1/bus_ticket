@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	

<h2>Show with form/old value</h2>
	<div class="row">
		<div class="col-md-12">
		<form action="{{route('routes.update',$route->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
	<label for="seatno">Seatno</label>
	<input type="text" name="seatno" value="{{$booking->seatno}}"><br>
	@if ($errors->has('seatno'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('seatno') }}</strong></span>
	@endif
	<br>
	
	<label for="date">Date</label>
	<input type="text" name="date" value="{{$booking->date}}"><br>
	@if ($errors->has('date'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('date') }}</strong></span>
	@endif
	<br>
	<label for="status">Status</label>
	<input type="text" name="time" value="{{$booking->time}}"><br>
	@if ($errors->has('status'))
	<span class="help-block text-danger"><strong>{{ $errors->first('status') }}</strong></span>
	@endif
	<br>
	
	<label for="startroute">Startroute</label>
	<input type="text" name="startroute" value="{{$route->startroute}}"><br>
	@if ($errors->has('startroute'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('startroute') }}</strong></span>
	@endif
	<br>
	
	<label for="endroute">Endroute</label>
	<input type="text" name="endroute" value="{{$route->endroute}}"><br>
	@if ($errors->has('startroute'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('endroute') }}</strong></span>
	@endif
	<br>
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Customer</label>
		<select name="customer_id" class="form-control">
			@foreach($customers as $row)
			<option value="{{$row->id}}" @if($booking->customer_id==$row->id) {{'selected'}}  @endif>{{$row->name}}</option>
			@endforeach
		</select>
	</div>
	<label for="totalprice">Totalprice</label>
	<input type="number" name="totalprice" value="{{$booking->totalprice}}"><br>
	@if ($errors->has('totalprice'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('totalprice') }}</strong></span>
	@endif
	<br>
	
	<!-- <input type="submit" name="save" value=""><br> -->
	<button type="submit">update</button>
</form>
		</div>
	</div>
</div>

@endsection
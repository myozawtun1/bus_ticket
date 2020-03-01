@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Route</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('bookings.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<label for="seatno">Seatno</label>
	<input type="number" name="seatno"><br>
	@if ($errors->has('seatno'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('seatno') }}</strong></span>
	@endif
	<br>
	
	<label for="date">Date</label>
	<input type="date" name="date"><br>
	@if ($errors->has('date'))
	<span class="help-block text-danger"><strong>{{ $errors->first('date') }}</strong></span>
	@endif
	<br>
	<label for="status">Status</label>
	<input type="text" name="status"><br>
	@if ($errors->has('status'))
	<span class="help-block text-danger"><strong>{{ $errors->first('status') }}</strong></span>
	@endif
	<br>

	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Routes</label>
		<select name="route_id" class="form-control">
			@foreach($routes as $row)
			<option value="{{$row->id}}">{{$row->startroute}}</option>
			@endforeach
		</select>
	</div>
	<br>

	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Routes</label>
		<select name="route_id" class="form-control">
			@foreach($routes as $row)
			<option value="{{$row->id}}">{{$row->endroute}}</option>
			@endforeach
		</select>
	</div>
	<br>

	<!-- <div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Routes</label>
		<select name="route_id" class="form-control">
			@foreach($routes as $row)
			<option value="{{$row->id}}">{{$row->time}}</option>
			@endforeach
		</select>
	</div>
	<br>
	 -->
	<!-- <label for="startroute">Startroute</label>
	<input type="text" name="startroute"><br>
	@if ($errors->has('startroute'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('startroute') }}</strong></span>
	@endif
	<br> -->
	
	<!-- <label for="endroute">Endroute</label>
	<input type="text" name="endroute"><br>
	@if ($errors->has('endroute'))
	<span class="help-block text-danger"><strong>{{ $errors->first('endroute') }}</strong></span>
	@endif
	<br> -->
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Customers</label>
		<select name="customer_id" class="form-control">
			@foreach($customers as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select>
	</div>
	<br>
	<label for="totalprice">Totalprice</label>
	<input type="number" name="totalprice"><br>
	@if ($errors->has('totalprice'))
	<span class="help-block text-danger"><strong>{{ $errors->first('totalprice') }}</strong></span>
	@endif
	<br>

	
	<!-- <input type="submit" name="save" value=""><br> -->
	
	<button type="submit">save</button>
</form>

			
		</div>
		
	</div>
	
</div>

@endsection
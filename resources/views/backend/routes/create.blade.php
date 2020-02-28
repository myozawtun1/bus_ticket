@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Route</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('routes.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<label for="startroute">Startroute</label>
	<input type="text" name="startroute"><br>
	@if ($errors->has('startroute'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('startroute') }}</strong></span>
	@endif
	<br>
	
	<label for="endroute">Endroute</label>
	<input type="text" name="endroute"><br>
	@if ($errors->has('endroute'))
	<span class="help-block text-danger"><strong>{{ $errors->first('endroute') }}</strong></span>
	@endif
	<br>
	<label for="time">Time</label>
	<input type="time" name="time"><br>
	@if ($errors->has('time'))
	<span class="help-block text-danger"><strong>{{ $errors->first('time') }}</strong></span>
	@endif
	<br>
	
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Types</label>
		<select name="type" class="form-control">
			@foreach($types as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select>
	</div>

	
	<!-- <input type="submit" name="save" value=""><br> -->
	
	<button type="submit">save</button>
</form>

			
		</div>
		
	</div>
	
</div>

@endsection
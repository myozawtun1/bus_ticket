@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	

<h2>Show with Routes Form</h2>
	<div class="row">
		<div class="col-md-12">
		<form action="{{route('routes.update',$route->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
	<div class="form-group row">
            <label for="inputStartroute" class="col-sm-2 col-form-label">Startroute</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('startroute') is-invalid @enderror" id="inputTitle" name="startroute" value="{{ $route->startroute }}" required autocomplete="startroute" autofocus>
              @error('startroute')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputEndroute" class="col-sm-2 col-form-label">Endroute</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('endroute') is-invalid @enderror" id="inputTitle" name="endroute" value="{{ $route->endroute }}" required autocomplete="endroute" autofocus>
              @error('endroute')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control @error('time') is-invalid @enderror" id="inputTitle" name="time" value="{{ $route->time }}" required autocomplete="time" autofocus>
              @error('time')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
	
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Types</label>
		<select name="type_id" class="form-control">
			@foreach($types as $row)
			<option value="{{$row->id}}" @if($route->type_id==$row->id) {{'selected'}}  @endif>{{$row->name}}</option>
			@endforeach
		</select>
	</div>
	 <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
    </div>

	
	
	<!-- <input type="submit" name="save" value=""><br> -->
	<!-- <button type="submit">update</button> -->
</form>
		</div>
	</div>
</div>

@endsection
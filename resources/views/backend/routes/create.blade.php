@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Create Route Form</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('routes.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group row">
            <label for="inputStartroute" class="col-sm-2 col-form-label">Startroute</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('startroute') is-invalid @enderror" id="inputTitle" name="startroute" value="{{ old('startroute') }}" required autocomplete="startroute" autofocus>
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
              <input type="text" class="form-control @error('endroute') is-invalid @enderror" id="inputTitle" name="endroute" value="{{ old('endroute') }}" required autocomplete="endroute" autofocus>
              @error('endroute')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputTIme" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control @error('time') is-invalid @enderror" id="inputTitle" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>
              @error('time')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <br>
    <div class="form-group row">
              <label for="inputType">Choose Type:</label>
            <div class="form-group col-md-6">              
              <select name="type" class="form-control" id="type">
                <option value="">Choose Type:</option>
                @foreach($types as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </select>
            </div>
        </div>



    <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>

	
	
	

	
	<!-- <input type="submit" name="save" value=""><br> -->
	
	<!-- <button type="submit">save</button> -->
</form>

			
		</div>
		
	</div>
	
</div>

@endsection
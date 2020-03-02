@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Booking Create Form</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('bookings.store')}}" method="post" enctype="multipart/form-data">
	@csrf

	<div class="form-group row">
            <label for="inputSeatno" class="col-sm-2 col-form-label">Seatno</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputTitle" name="seatno" value="{{ old('seatno') }}" required autocomplete="seatno" autofocus>
              @error('seatno')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('date') is-invalid @enderror" id="inputTitle" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
              @error('date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('status') is-invalid @enderror" id="inputTitle" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>
              @error('status')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
     <div class="form-group row">
              <label for="inputStartroute">Choose Startroute:</label>
            <div class="form-group col-md-6">              
              <select name="startroute" class="form-control" id="startroute">
                <option value="">Choose Startroute:</option>
                @foreach($routes as $row)
                <option value="{{$row->id}}">{{$row->startroute}}</option>
                @endforeach
              </select>
            </div>
        </div>
    <div class="form-group row">
              <label for="inputStartroute">Choose Endroute:</label>
            <div class="form-group col-md-6">              
              <select name="endroute" class="form-control" id="endroute">
                <option value="endroute">Choose Endroute:</option>
                @foreach($routes as $row)
                <option value="{{$row->id}}">{{$row->endroute}}</option>
                @endforeach
              </select>
            </div>
        </div>
    <div class="form-group row">
            <label for="inputTotalprice" class="col-sm-2 col-form-label">Total Price</label>
            <div class="col-sm-10">
              <input type="number" class="form-control @error('totalprice') is-invalid @enderror" id="inputTitle" name="totalprice" value="{{ old('totalprice') }}" required autocomplete="totalprice" autofocus>
              @error('totalprice')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
	
	 <div class="form-group row">
              <label for="inputCustomer">Choose Customer:</label>
            <div class="form-group col-md-6">              
              <select name="customer" class="form-control" id="customer">
                <option value="customer">Choose Customer:</option>
                @foreach($customers as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
              </select>
            </div>
        </div>


          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>

	

	
	<!-- <input type="submit" name="save" value=""><br> -->
	
	
</form>

			
		</div>
		
	</div>
	
</div>

@endsection
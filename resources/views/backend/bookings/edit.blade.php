@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	

<h2>Show with Booking form</h2>
	<div class="row">
		<div class="col-md-12">
		<form action="{{route('bookings.update',$booking->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT') 
	<div class="form-group row">
            <label for="inputSeatno" class="col-sm-2 col-form-label">Seatno</label>
            <div class="col-sm-10">
              <input type="number" class="form-control @error('seatno') is-invalid @enderror" id="inputTitle" name="seatno" value="{{ $booking->seatno }}" required autocomplete="seatno" autofocus>
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
              <input type="date" class="form-control @error('date') is-invalid @enderror" id="inputTitle" name="date" value="{{ $booking->date }}" required autocomplete="date" autofocus>
              @error('date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
	<!-- <label for="status">Status</label>
	<input type="text" name="time" value="{{$booking->time}}"><br>
	@if ($errors->has('status'))
	<span class="help-block text-danger"><strong>{{ $errors->first('status') }}</strong></span>
	@endif
	<br> -->
	
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Startroute</label>
		<select name="route_id" class="form-control">
			@foreach($routes as $row)
			<option value="{{$row->id}}" @if($booking->route_id==$row->id) {{'selected'}}  @endif>{{$row->startroute}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Endroute</label>
		<select name="route_id" class="form-control">
			@foreach($routes as $row)
			<option value="{{$row->id}}" @if($booking->route_id==$row->id) {{'selected'}}  @endif>{{$row->endroute}}</option>
			@endforeach
		</select>
	</div>	
	<br>
	<div class="form-group row">
		<label class="col-sm-12 col-form-label">Choose Customer</label>
		<select name="customer_id" class="form-control">
			@foreach($customers as $row)
			<option value="{{$row->id}}" @if($booking->customer_id==$row->id) {{'selected'}}  @endif>{{$row->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
    </div>
	
	<!-- <input type="submit" name="save" value=""><br> -->
	
</form>
		</div>
	</div>
</div>

@endsection
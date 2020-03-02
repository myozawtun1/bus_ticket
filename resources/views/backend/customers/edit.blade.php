@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	

<h2>Show with Customer form</h2>
	<div class="row">
		<div class="col-md-12">
		<form action="{{route('customers.update', $customer->id)}}" method="post" enctype="multipart/form-data">

	@csrf
	@method('PUT') 
	<div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputTitle" name="name" value="{{ $customer->name }}" required autocomplete="name" autofocus>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="inputTitle" name="email" value="{{ $customer->email }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="number" class="form-control @error('phone') is-invalid @enderror" id="inputTitle" name="phone" value="{{ $customer->phone }}" required autocomplete="phone" autofocus>
              @error('phone')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
    <div class="form-group row">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputTitle" name="address" value="{{ $customer->address }}" required autocomplete="address" autofocus>
              @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
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
@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Create Customers Form</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
	@csrf

	<div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputTitle" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputTitle" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
              <input type="number" class="form-control @error('phone') is-invalid @enderror" id="inputTitle" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
              <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputTitle" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
              @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

    
	<div class="form-group col-md-6">
              <label for="inputGender" class="d-block">Gender:</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" checked="checked" name="gender">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" name="gender">
                <label class="form-check-label" for="inlineRadio2">Female</label>
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
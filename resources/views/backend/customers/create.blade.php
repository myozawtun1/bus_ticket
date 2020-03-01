@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Create Form</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<label for="name">Name</label>
	<input type="text" name="name"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif
	<br>
	
	<label for="email">Email</label>
	<input type="text" name="email"><br>
	@if ($errors->has('email'))
	<span class="help-block text-danger"><strong>{{ $errors->first('email') }}</strong></span>
	@endif
	<br>
	<label for="phone">Phone</label>
	<input type="number" name="phone"><br>
	@if ($errors->has('phone'))
	<span class="help-block text-danger"><strong>{{ $errors->first('phone') }}</strong></span>
	@endif
	<br>
	
	<label for="address">Address</label>
	<input type="text"  name="address"><br>
	@if ($errors->has('address'))
	<span class="help-block text-danger"><strong>{{ $errors->first('address') }}</strong></span>
	@endif
	<br>
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
	

	<!-- <input type="submit" name="save" value=""><br> -->
	
	<button type="submit">save</button>
</form>

			
		</div>
		
	</div>
	
</div>

@endsection
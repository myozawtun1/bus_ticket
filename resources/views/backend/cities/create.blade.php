@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Create Cities Form</h2>

    <div class="row">
      <div class="col-md-12">


<form action="{{route('cities.store')}}" method="post" enctype="multipart/form-data">
	
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
           <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
         </div>

</form>
</div>
</div>
</div>

@endsection
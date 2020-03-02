@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Create Types Form</h2>

    <div class="row">
      <div class="col-md-12">

<form action="{{route('types.store')}}" method="post" enctype="multipart/form-data">
	
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
            <label for="inputSeat" class="col-sm-2 col-form-label">Seat</label>
            <div class="col-sm-10">
              <input type="number" class="form-control @error('seat') is-invalid @enderror" id="inputTitle" name="seat" value="{{ old('seat') }}" required autocomplete="seat" autofocus>
              @error('seat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="inputTitle" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
              @error('price')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
         <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
         </div>
     </div>
 </div>
</div>



	
</form>

@endsection

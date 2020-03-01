@extends('backendtemplate')
@section('content')
<h2>Types</h2>

<form action="{{route('types.store')}}" method="post" enctype="multipart/form-data">
	
	@csrf
	<label for="name">Name</label>
	<input type="text" name="name"><br>
	@if ($errors->has('name'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('name') }}</strong></span>
	@endif <br>
	<label for="seat">Seat</label>
	<input type="number" name="seat"><br>
	@if ($errors->has('seat'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('seat') }}</strong></span>
	@endif <br>
	<label for="price">Price</label>
	<input type="number" name="price"><br>
	@if ($errors->has('price'))
	<span class="help-block  text-danger"><strong>{{ $errors->first('price') }}</strong></span>
	@endif <br>
	<button type="submit">save</button>
</form>

@endsection
@section('script')
  <script type="text/javascript" src="{{asset('js/general.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/interaction.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/methods.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/multiple.js')}}"></script>
  <script type="text/javascript" src="{{asset('jquery.seat-charts.js')}}"></script>
  <script type="text/javascript" src="{{asset('jquery.seat-charts.css')}}"></script>
  <script type="text/javascript" src="{{asset('jquery.seat-charts.min.js')}}"></script>


@endsection
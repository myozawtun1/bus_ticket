@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Cities</h2>

<div class="row">

	<table border="1" class="table table-bordered">
	
	<thead>
		<tr>
		<th>No</th>
		<th>name</th>				
		<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($cities as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>
				
				<a href="{{route('cities.edit',$row->id)}}" class="btn btn-warning">
				<i class="fas fa-edit"></i>
					
				</a>
				<form method="post" action="{{route('cities.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">

					@csrf
					@method('DELETE')

				<button type="submit" class="btn btn-danger">
				<i class="fas fa-trash"></i>
				</button>
				</form>

			</td>		

		</tr>
		@endforeach
	</tbody>
</table>
	<a href="{{route('cities.create')}}" class="btn btn-info float-right">Add New</a>


</div>
</div>
@endsection
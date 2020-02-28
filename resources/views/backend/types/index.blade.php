@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Types</h2>

<div class="row">

	<table border="1" class="table table-bordered">
	
	<thead>
		<tr>
		<th>No</th>
		<th>name</th>
		<th>seat</th>
		<th>price</th>				
		<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($types as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->seat}}</td>
			<td>{{$row->price}}</td>
			<td>
				
				<a href="{{route('types.edit',$row->id)}}" class="btn btn-warning">
				<i class="fas fa-edit"></i>
					
				</a>
				<form method="post" action="{{route('types.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">

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
	<a href="{{route('types.create')}}" class="btn btn-info float-right">Add New</a>


</div>
</div>
@endsection
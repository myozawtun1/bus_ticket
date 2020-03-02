@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with table Route</h2>

<div class="row">

<table border="1" class="table table-bordered">
	
	<thead>
		<tr>
		<th>No</th>
		<th>Startroute</th>
		<th>Endroute</th>
		<th>Time</th>
		<th>Bus Type</th>
		<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($routes as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->startroute}}</td>
			<td>{{$row->endroute}}</td>
			<td>{{$row->time}}</td>
			<td>{{$row->type->name}}</td>

			


			<td>
				<a href="{{route('routes.show',$row->id)}}" class="btn btn-info">
				<i class="fas fa-info"></i>
				
				</a>
				<a href="{{route('routes.edit',$row->id)}}" class="btn btn-warning">
				<i class="fas fa-edit"></i>
				
				</a>
				<form method="post" action="{{route('routes.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">

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
<a href="{{route('routes.create')}}" class="btn btn-info float-right">Add New</a>


</div>
</div>

@endsection
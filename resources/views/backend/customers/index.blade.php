@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with table</h2>

<div class="row">

<table border="1" class="table table-bordered">
	
	<thead>
		<tr>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		
		<th>phone</th>
		<!-- <th>avatar</th> -->
		<th>address</th>
		<th>Gender</th>

		<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($customers as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
			<!-- <td>{{$row->user_id}}</td> -->
			<td>{{$row->email}}</td>
			<td>{{$row->phone}}</td>
			<td>{{$row->address}}</td>
			<td>{{$row->gender}}</td>
			

			<td>
				<a href="{{route('customers.show',$row->id)}}" class="btn btn-info">
				<i class="fas fa-info"></i>
				
				</a>
				<a href="{{route('customers.edit',$row->id)}}" class="btn btn-warning">
				<i class="fas fa-edit"></i>
				
				</a>
				<form method="post" action="{{route('customers.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">

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
<a href="{{route('customers.create')}}" class="btn btn-info float-right">Add New</a>


</div>
</div>

@endsection
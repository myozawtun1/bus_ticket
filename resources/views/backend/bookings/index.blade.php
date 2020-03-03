@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with table Route</h2>

<div class="row">

<table border="1" class="table table-bordered">
	
	<thead>
		<tr>
		<th>No</th>
		<th>Seatno</th>
		<th>Date</th>
		<th>Status</th>
		<th>Startroute</th>
		<th>Endroute</th>		
		<th>Total Price</th>
		<th>Customer</th>

		<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($bookings as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->seatno}}</td>
			<td>{{$row->date}}</td>
			<td>{{$row->status}}</td>
			<td>{{$row->route->startroute}}</td>
			<td>{{$row->route->endroute}}</td>
			<td>{{$row->totalprice}}</td>
			<td>{{$row->customer->name}}</td>
			


			


			<td>
				<a href="{{route('bookings.show',$row->id)}}" class="btn btn-info">
				<i class="fas fa-info"></i>
				
				</a>
				<!-- <a href="{{route('bookings.edit',$row->id)}}" class="btn btn-warning">
				<i class="fas fa-edit"></i>
				
				</a> -->
				<form method="post" action="{{route('bookings.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">

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
<a href="{{route('bookings.create')}}" class="btn btn-info float-right">Add New</a>


</div>

</div>

@endsection
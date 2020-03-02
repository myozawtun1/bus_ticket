
@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with booking details</h2>
	
	<div class="row">
		<div class="col-md-12">
			<table>
				<tbody>
					<tr><th> Seatno:{{$booking->seatno}} </th></tr>
					<tr><th> Date:{{$booking->date}} </th></tr>

					<!-- <tr><th> Startroute:{{$booking->startroute}} </th></tr> -->
					<tr><th>Route:{{$booking->route}}</th></tr>
					<tr><th>Totalprice:{{$booking->totalprice}}</th></tr>
					<tr><th> Customer:{{$booking->customer->name}} </th></tr>

					
				</tbody>

			<br>
			</table>
			
		</div>
		
	</div>
</div>


@endsection

@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with customer details</h2>
	
	<div class="row">
		<div class="col-md-12">
			<table>
				<tbody>
					<tr><th> Name:{{$customer->name}} </th></tr>
					<tr><th>Email:{{$customer->email}}</th></tr>
					<tr><th>Phone:{{$customer->phone}}</th></tr>
					<tr><th>Address:{{$customer->address}}</th></tr>
					<tr><th>Gender:{{$customer->gender}}</th></tr>

					
				</tbody>

			<br>
			</table>
			
		</div>
		
	</div>
</div>


@endsection
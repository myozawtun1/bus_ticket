
@extends('backendtemplate')
@section('content')
<div class="container-fluid">
<h2>Show with your own ui</h2>
	
	<div class="row">
		<div class="col-md-12">
			<table>
				<tbody>
					<tr><th> Startroute:{{$route->startroute}} </th></tr>
					<tr><th>Endroute:{{$route->endroute}}</th></tr>
					<tr><th>Time:{{$route->time}}</th></tr>
					
				</tbody>

			<br>
			</table>
			
		</div>
		
	</div>
</div>


@endsection
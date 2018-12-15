@extends('admin.layout.admin')

@section('content')
<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Tournaments Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Beggins</th>
			<th >Ends</th>
			<th >Participants</th>
			<th>Author</th>
			<th>Prizes</th>
			<th >Action</th>

		</tr>
	</thead>
	<tbody>
		@forelse($tournaments as $tournament)
			<tr>
				<td>{{$tournament->id}}</td>
				<td>{{$tournament->title}}</td>
				<td>{{$tournament->beggins}}</td>
				<td>{{$tournament->ends}}</td>
				<td>{{$tournament->participants}}</td>
				<td>{{$tournament->author}}</td>
				<td>{{$tournament->prizes}}</td>

				<td>
					<a href="{{route('tournament.edit',$tournament->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>				
					{{-- delete button --}}
			        <form action="{{route('tournament.destroy',
			        	  $tournament->id)}}"  method="POST">
			           	{{csrf_field()}}
			            {{method_field('DELETE')}}
			            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
			        </form>
		        </td>
			</tr>
		@empty
			<h3>No Items has been added</h3>	
		@endforelse	
	</tbody>
</table>


@endsection
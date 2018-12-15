@extends('admin.layout.admin')

@section('content')


<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Games Items</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Reviews</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($games as $game)
			<tr>
				<td>{{$game->id}}</td>
				<td>{{$game->name}}</td>
				<td>{{$game->par}}</td>
				<td>{{$game->review}}</td>
				<td>
					{{-- delete button --}}
					<a href="{{route('game.edit',$game->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>

			        <form action="{{route('game.destroy',$game->id)}}"  method="POST">
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
@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Recent Game Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Image-Button</th>
			<th >Image-Button-class</th>
			<th >Action</th>

		</tr>
	</thead>
	<tbody>
		@forelse($recentgames as $recentgame)
			<tr>
				<td>{{$recentgame->id}}</td>
				<td>{{$recentgame->title}}</td>
				<td>{{$recentgame->par}}</td>	
				<td>{{$recentgame->image_button}}</td>
				<td>{{$recentgame->image_button_class}}</td>
				
				<td>
					<a href="{{route('recentgame.edit',$recentgame->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					
					{{-- delete button --}}
			        <form action="{{route('recentgame.destroy',$recentgame->id)}}"  method="POST">
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
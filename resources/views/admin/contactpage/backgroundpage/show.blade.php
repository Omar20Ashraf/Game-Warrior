@extends('admin.layout.admin')

@section('content')


<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Contact us Items</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->description}}</td>
				<td>
					<a href="{{route('contactbackground.edit',$item->id)}}"
					   class="btn btn-default" style="margin-bottom: 15px;">Edit
					</a>
					{{-- delete button --}}
			        <form action="{{route('contactbackground.destroy',$item->id)}}"  method="POST">
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
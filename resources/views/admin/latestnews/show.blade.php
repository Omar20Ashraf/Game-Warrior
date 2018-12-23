@extends('admin.layout.admin')

@section('content')


<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Latest News Items</h2>

<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Description</th>
			<th >Tag Name</th>
			<th >Tag Color</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->description}}</td>
				<td>{{$item->tag_name}}</td>
				<td>{{$item->tag_color}}</td>
				<td>
					<a href="{{route('latestnews.edit',$item->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>			
					{{-- delete button --}}
			        <form action="{{route('latestnews.destroy',$item->id)}}"  method="POST">
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
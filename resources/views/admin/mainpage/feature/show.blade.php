@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Features Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Button</th>
			<th >Button Color</th>
			<th >Action</th>

		</tr>
	</thead>
	<tbody>
		@forelse($features as $feature)
			<tr>
				<td>{{$feature->id}}</td>
				 <td>{{$feature->title}}</td>
				 <td>{{$feature->par}}</td>
				 <td>{{$feature->button}}</td>
				 <td>{{$feature->button_color}}</td>	

				 <td>
					<a href="{{route('feature.edit',$feature->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					{{-- delete button --}}
			        <form action="{{route('feature.destroy',$feature->id)}}"  
			        	  method="POST">
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
@extends('admin.layout.admin')

@section('content')

<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Hero Items</h2>

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
		@forelse($products as $product)
			<tr>
				<td> {{$product->id}}</td>
				<td> {{$product->title}}</td>
				<td> {{$product->par}}</td>
				<td>
					<a href="{{route('hero.edit',$product->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>
					{{-- delete button --}}
			        <form action="{{route('hero.destroy',$product->id)}}"  method="POST">
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
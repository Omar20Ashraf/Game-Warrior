@extends('admin.layout.admin')

@section('content')


<head>
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
</head>
<h2>Recent Review Items</h2>
<table class="table" id="customers">
	<thead>
		<tr>
			<th>Id</th>
			<th >Name</th>
			<th >Description</th>
			<th >Evalution</th>
			<th >Evalution Color</th>
			<th >Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($recentreviews as $recentreview)
			<tr>
				<td>{{$recentreview->id}}</td>	
				<td>{{$recentreview->title}}</td>
				<td>{{$recentreview->par}}</td>
				<td>{{$recentreview->evalution}}</td>
				<td>{{$recentreview->evalution_color}}</td>
				<td>
					<a href="{{route('recentreview.edit',$recentreview->id)}}" class="btn btn-default" style="margin-bottom: 15px;">Edit</a>	
					{{-- delete button --}}
			        <form action="{{route('recentreview.destroy',$recentreview->id)}}"  method="POST">
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
	{{-- The model is BlogSidebar --}}

	<!-- sidebar -->
	<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
		<!-- widget -->
{{-- 		<div class="widget-item">
			<form class="search-widget">
				<input type="text" placeholder="Search">
				<button><i class="fa fa-search"></i></button>
			</form>
		</div> --}}
		@forelse($items as $item)
			<div class="widget-item">
				<div class="feature-item set-bg" 
					 data-setbg="{{url('images/blog/sidebar',$item->image)}}">
					<span class="cata {{$item->button_color}}">
						{{$item->button}}
					</span>
					<div class="fi-content text-white">
						<h5>
							<a href="/blog/sidebar/{{$item->id}}">{{$item->name}}</a>
						</h5>
						<p>{{$item->par}}</p>
						<p class="fi-comment">
							{{ $item->blogSidebarComment->count() }} comment
						</p>
					</div>
				</div>
			</div>
		@empty
			<h3>No Data</h3>
		@endforelse	
	</div>

<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
	<div class="container">
		<!-- logo -->
		<a class="site-logo" href="{{route('index')}}">
			<img src="{{ url('img/logo.png') }}" alt="">
		</a>

        <!-- Right Side Of Navbar -->
        <div class="user-panel">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <a href="{{ route('login') }}">Login</a>
                /
                <a href="{{ route('register') }}">Register</a>
            @else

                    <span>
                        {{ Auth::user()->name }} 
                        <span class="caret"></span>
                    </span>
                    /
                    <a href="{{url('/logout')}}">Logout</a>
            @endif
        </div>		

		<!-- responsive -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<!-- site menu -->
		<nav class="main-menu">
			<ul>
				<li><a href="{{route('index')}}">Home</a></li>
				<li><a href="{{route('games')}}">Games</a></li>
				<li><a href="{{route('blog')}}">Blog</a></li>
				<li><a href="{{route('forums')}}">Forums</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>
<!-- Header section end -->

<!-- game info section -->
	@include('pages.latest_news')	
<!-- game info section -->






<ul class="nav navbar-nav">
    <li class="dropdown">
        <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">
            {{Auth::user()->name}} 
            <b class="caret"></b></a>

        <ul class="dropdown-menu animated fadeInUp">
            <li>
                <a href="{{url('/logout')}}">Logout</a>
            </li>
        </ul>
    </li>
</ul>                
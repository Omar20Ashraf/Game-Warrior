<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Game Warrior Template">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Game Warrior </title>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/all.css') }}" rel="stylesheet">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="row">
    	
		@yield('content')
		
    </div>
  </div>

<script src="{{ asset('js/jquery-3.2.1.min') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>                            
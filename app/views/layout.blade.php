<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ url('css/datepicker.css')}}">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript">></script>
		<script src="{{ url('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
	</head>
	<body>
		<div class="text-center">
			<h1>My Todo List</h1>
			<div class="container">
				@yield('content')
			</div>
		</div>
		
		<script src="{{ url('js/bootstrap.min.js')}}" type="text/javascript"></script>
	</body>	
</html
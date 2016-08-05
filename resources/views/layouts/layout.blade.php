<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda Crud</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<style>
		#imgs{
			width: 64px;
			height: 64px;
		}
	</style>
</head>
<body><br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="well">
			  
				
				@yield('content')
				
			</div>
			</div>
		</div>
	</div>

	<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
</body>
</html>
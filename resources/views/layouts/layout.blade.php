<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda Crud</title>
	{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		#imgs{
			width: 64px;
			height: 64px;
		}
		.card-title{
			color: #fff;
		}
		
	</style>
</head>
<body>
<br>

	<div class="container">
		<div class="row">
			<div class="col s6  offset-s3">
			<div class="card blue-grey darken-1">
            <div class="card-content darken-1-text ">
              <span class="card-title">AGENDA CRUD</span>
				@yield('content')
			</div>
			</div>
          </div>
		</div>
	</div>


  <!-- Compiled and minified JavaScript -->

	<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
		    $('select').material_select();
		  });
	</script>
</body>
</html>
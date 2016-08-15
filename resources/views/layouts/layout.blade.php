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
			color: #000;
		}
		.btn-floating{
			margin-right: 0.5em;
			float: left;
		}
		

	</style>
</head>
<body>
<br>

	<div class="container">
		<div class="row">
			<div class="col s6  offset-s3">
			<div class="card grey darken-4">
            <div class="card-content grey lighten-5 ">
              <span class="card-title">AGENDA CRUD</span>
              @include('partials.btn-nav')
                @include('mensajes.mensaje')
				@yield('content')
			</div>
			</div>
          </div>
		</div>
	</div>


  

	<script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script>
	{{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
		    $('select').material_select();
		  });
		 $(document).ready(function(){
		    $('.tooltipped').tooltip({delay: 50});
		  });
      
	</script>
</body>
</html>
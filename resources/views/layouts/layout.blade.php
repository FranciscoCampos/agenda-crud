<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda Crud</title>
	
	  {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css')!!}
	  {!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
  
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
		.centrado{
           margin-left: 35%;
		}
  </style>

		

</head>
<body>
<br><br>

	<div class="container">
		<div class="row">
			<div class="col s6  offset-s3">
				<div class="card grey darken-4">
		            <div class="card-content grey lighten-5 ">
		              <span class="card-title">AGENDA CRUD</span>
		                @include('partials.btn-nav')
		                @include('mensajes.mensaje')
						@yield('content')
						<br>
						<hr>
						<h6>&copy; Copyrigth Francisco Campos</h6>
					</div>
				</div>
          </div>
		</div>
	</div>


  
   {!!Html::script('assets/js/jquery-3.1.0.min.js')!!}
   {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js')!!}
	{{-- <script src="{{asset('assets/js/jquery-3.1.0.min.js')}}"></script> --}}
	{{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script> --}}
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
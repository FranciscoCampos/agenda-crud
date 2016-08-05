@extends('layouts.layout')



@section('content')



 <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
      </span> 
      <button type="button" class="btn btn-primary  pull-right" aria-label="Left Align">
		  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		</button>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

  <hr>

 @for($i=0;$i< 2;$i++)
  <div class="media">
	  <div class="media-left">
	    <a href="#">
	      <img class="media-object " id="imgs" src="{{asset('img/grunt-logo.png')}}"/>
	    </a>
	  </div>
	  <div class="media-body">
	    <h4 class="media-heading">Francisco Campos</h4>
	    <h5 class="media-heading">email@hotmail.com</h5>
	    <button type="button" class="btn btn-primary btn-xs pull-right" aria-label="Left Align">
		  <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
		</button>
	  </div>
	</div>
 <hr>
 @endfor
@stop
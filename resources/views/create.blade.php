@extends('layouts.layout')



@section('content')


 <form action="{{route('agenda.store')}}" method="POST">

     {{csrf_field()}}

       <div class="input-field col s12">
          <input type="text" name="nombre" class="validate">
            <label for="nombre" data-error="wrong" data-success="right">Nombre</label>
        </div>

       <div class="input-field col s12">
          <input type="text" name="apellido" class="validate" >
          <label for="apellido" data-error="wrong" data-success="right">Apellido</label>
        </div>

       <div class="input-field col s12">
          <input type="email" name="email" class="validate" >
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>

	 <div class="input-field col s12 ">
	    <select class="icons" name="avatar">
	      <option value="" >Selecciona tu Avatar</option>
	      <option value="img01.jpg" data-icon="{{asset('img/img01.jpg')}}" class="circle">Avatar-01</option>
	      <option value="img02.jpg" data-icon="{{asset('img/img02.jpg')}}" class="circle">Avatar-02</option>
	      <option value="img03.jpg" data-icon="{{asset('img/img03.jpg')}}" class="circle">Avatar-03</option>
	    </select>
	  </div>

  	<div class="input-field col s12 ">
	    <select class="icons" name="grupo">
	      <option value="">Selecciona un  grupo</option>
	      <option value="familia" >Familia</option>
	      <option value="trabajo">Trabajo</option>
	      <option value="amigos">Amigos</option>
	    </select>
	  </div>

  <button type="submit" class="btn btn-info">Nuevo</button>
</form>
@stop
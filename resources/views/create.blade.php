@extends('layouts.layout')



@section('content')


 <form action="{{route('agenda.store')}}" method="POST" autocomplete="off">

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

	 @include('partials.avatar')

  	<div class="input-field col s12 ">
	    <select class="icons" name="grupo">
	      <option value="">Selecciona un  grupo</option>
	      <option value="familia" >Familia</option>
	      <option value="trabajo">Trabajo</option>
	      <option value="amigos">Amigos</option>
	    </select>
	  </div>

  <button type="submit" class="btn btn-info">Guardar</button>
</form>
@stop
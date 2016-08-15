@extends('layouts.layout')



@section('content')

@include('errors.errors')

{!! Form::model($contacto , ['route' => ['agenda.update', $contacto->id ] , 'method' => 'PUT' ,'autocomplete'=>'off'])!!}

   @include('partials.formulario')

  {!! Form::submit('Guardar' , ['class' => 'btn btn-info'])!!}
  
{!! Form::close()!!}

@stop
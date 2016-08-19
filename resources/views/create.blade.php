@extends('layouts.layout')



@section('content')

{{-- @include('errors.errors') --}}

{!! Form::open(['route' => 'agenda.store' , 'method' => 'POST' ,'autocomplete'=>'off'])!!}

   @include('partials.formulario')

  {!! Form::submit('Guardar' , ['class' => 'btn btn-info'])!!}
  
{!! Form::close()!!}

@stop






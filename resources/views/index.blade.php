@extends('layouts.layout')



@section('content')
          

	<div class="row">
	<a class="btn-floating right" href="{{route('agenda.create')}}"><i class="material-icons">add</i></a>
    <form action="{{route('agenda.index')}}" method="GET">
		<div class="input-field col s12">
			<input placeholder="Buscar Contacto" name="nombre" id="first_name" type="text" class="validate">
	    </div>
    </form>
	</div>

@if(count($contactos))

 <ul class="collection">

    @foreach($contactos as $contacto)
	    <li class="collection-item avatar">
	      <img src="img/{{$contacto->avatar}}" alt="" class="circle">
	      <span class="title">{{$contacto->nombre . ' '. $contacto->apellido}}</span>
	      <p>{{$contacto->email}}<br>
	      </p>
	      <a href="{{route('agenda.show', $contacto->id)}}" class="secondary-content"><i class="material-icons">visibility</i></a>
	    </li>
    @endforeach
 	
  </ul>
   

    {!! $contactos->render() !!}
   
@else
   <h6>No Hay resultados...</h6>
@endif	


@stop
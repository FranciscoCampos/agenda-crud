@if(count($contactos))

 <ul class="collection">

    @foreach($contactos as $contacto)
	    <li class="collection-item avatar">
	      <img src="img/{{$contacto->avatar}}" alt="" class="circle">
	      <span class="title">{{$contacto->nombre . ' '. $contacto->apellido}}</span>
	      <p>{{$contacto->email}}<br>
	      </p>
	      <a href="{{route('agenda.show', $contacto->id)}}" class="secondary-content tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>
	    </li>
    @endforeach
 	
  </ul>

    {!! $contactos->render() !!}
   
@else
   <h6>No Hay resultados...</h6>
@endif	
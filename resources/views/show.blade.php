@extends('layouts.layout')



@section('content')
   <div class="row">
        <div class="col s12 ">
          <div class="card">
            <div class="card-image">
             <img src="{{url('img',$contacto->avatar)}}">
            </div>
            <div class="card-content text-darken-4">
              <h5>{{$contacto->nombre .' ' . $contacto->apellido}}</h5>
              <p>{{$contacto->email}}</p>
            </div>
            <div class="card-action">
              <a href="{{route('agenda.index')}}"><i class="small material-icons">contacts</i></a>
              <a href="{{route('agenda.edit', $contacto->id)}}"><i class="small material-icons">mode_edit</i></a>
              <a href="{{route('agenda.index')}}"><i class="small material-icons">delete</i></a>
            </div>
          </div>
        </div>
      </div>
@stop
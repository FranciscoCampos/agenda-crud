@extends('layouts.layout')



@section('content')
   <div class="row">
        <div class="col s12 ">
          <div class="card ">
            <div class="card-image">
             <img class="responsive-img" src="{{url('img',$contacto->avatar)}}">
            </div>
            <div class="card-content text-darken-4">
              <h5>{{$contacto->nombre .' ' . $contacto->apellido}}</h5>
              <p>{{$contacto->email}}</p>
              <p>Grupo: {{$contacto->grupo}}</p>
            </div>
            <div class="card-action">
             <div class="row">
               <div class="col s4">
                 <a class="btn-floating waves-light btn  " href="{{route('agenda.index')}}"><i class="small material-icons">contacts</i></a>
               </div> 
               <div class="col s4">
                 <center><a class="btn-floating deep-purple lighten-1 btn " href="{{route('agenda.edit', $contacto->id)}}"><i class="small material-icons">mode_edit</i></a> </center>
               </div>
               <div class="col s4">
         {!!Form::open(['route'  => ['agenda.destroy' , $contacto->id ] , 'method' =>'DELETE'])!!}
              <button type="submit" class="btn-floating  red lighten-1 btn right "><i class="small material-icons">delete</i></button> 
          {!!Form::close()!!}
                 
               </div> 
             </div>
            </div>
          </div>
        </div>
      </div>
@stop
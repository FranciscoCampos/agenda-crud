 @extends('layouts.layout')

@section('content')

             <form action="{{route('agenda.destroy' , $contacto->id)}}" method="POST">
                {{ method_field('DELETE')}} {{csrf_field()}}
             
              <button type="submit" class="waves-effect waves-light btn"><i class="small material-icons">delete</i></button> 
              </form>
@stop
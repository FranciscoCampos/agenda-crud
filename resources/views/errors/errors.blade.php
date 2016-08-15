
@if( count($errors))
  
   <ul class="collection with-header">
        <li class="collection-header"><h5>Oh hay errores...</h5></li>
        @foreach($errors->all() as $error)
        	<li class="collection-item pink lighten-5">{{ $error}}</li>
        @endforeach
  </ul>

@endif

{{-- @if($errors->first('grupo'))<div class="card-panel pink lighten-5"> {{ $errors->first('grupo') }} </div>@endif --}}
      {{csrf_field()}}

       <div class="input-field col s12">
            {!! Form::text('nombre',null, ['class' => 'validate']) !!}      
            {!! Form::label('nombre' , 'Nombre' , $attributes = ['data-error'=>'wrong', 'data-success' => 'right']) !!}
            @if($errors->first('nombre'))<span  class="pink lighten-5"> {{ $errors->first('nombre') }} </span>@endif 
      </div>

       <div class="input-field col s12">
          {!! Form::text('apellido', null , ['class' => 'validate']) !!}
          {!! Form::label('apellido' , 'Apellido' , $attributes = ['data-error'=>'wrong', 'data-success' => 'right']) !!}
          @if($errors->first('apellido'))<span  class="pink lighten-5"> {{ $errors->first('apellido') }} </span>@endif 
        </div>

       <div class="input-field col s12">
          {!! Form::email('email', null , ['class' => 'validate']) !!}
          {!! Form::label('email' , 'Email' , $attributes = ['data-error'=>'wrong', 'data-success' => 'right']) !!}
          @if($errors->first('email'))<span  class="pink lighten-5"> {{ $errors->first('email') }} </span>@endif 
        </div>

      <div class="input-field col s12 "> 
        {!! Form::select('grupo',
          ['familia' => 'familia', 'trabajo' => 'trabajo' , 'amigos' => 'amigos'],null, 
           ['placeholder' => 'Selecciona un  grupo'], ['class' => 'icons'] )
        !!}

        @if($errors->first('grupo'))<span  class="pink lighten-5"> {{ $errors->first('grupo') }} </span>@endif 
        
      </div>

      @include('partials.avatar')
     

 
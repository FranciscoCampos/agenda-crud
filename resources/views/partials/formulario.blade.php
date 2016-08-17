      {{csrf_field()}}

       <div class="input-field col s12">
            {!! Form::text('nombre',null, ['class' => 'validate']) !!}      
            {!! Form::label('nombre' , 'Nombre' , $attributes = ['data-error'=>'wrong', 'data-success' => '']) !!}
            @if($errors->first('nombre'))<span  class="pink lighten-5"> {{ $errors->first('nombre') }} </span>@endif 
      </div>

       <div class="input-field col s12">
          {!! Form::text('apellido', null , ['class' => 'validate']) !!}
          {!! Form::label('apellido' , 'Apellido' , $attributes = ['data-error'=>'wrong', 'data-success' => '']) !!}
          @if($errors->first('apellido'))<span  class="pink lighten-5"> {{ $errors->first('apellido') }} </span>@endif 
        </div>

       <div class="input-field col s12">
          {!! Form::email('email', null , ['class' => 'validate']) !!}
          {!! Form::label('email' , 'Email' , $attributes = ['data-error'=>'wrong', 'data-success' => '']) !!}
          @if($errors->first('email'))<span  class="pink lighten-5"> {{ $errors->first('email') }} </span>@endif 
        </div>

      <div class="input-field col s12 "> 
        {!! Form::select('grupo',
          ['familia' => 'familia', 'trabajo' => 'trabajo' , 'amigos' => 'amigos'],null, 
           ['placeholder' => 'Selecciona un  grupo'], ['class' => 'icons'] )
        !!}

        @if($errors->first('grupo'))<span  class="pink lighten-5"> {{ $errors->first('grupo') }} </span>@endif 
        
      </div>

       <div class="input-field col s12 ">
        {!! Form::select('avatar',
          [ 'img01.jpg' => 'Avatar-01', 
            'img02.jpg' => 'Avatar-02' ,
            'img03.jpg' => 'Avatar-03' ,
            'img05.jpg' => 'Avatar-05',
            'img06.jpg' => 'Avatar-06',
            'img08.jpg' => 'Avatar-08'
           ],null,
           ['placeholder' => 'Selecciona un Avatar'], ['class' => 'icons'] )
        !!}
        @if($errors->first('avatar'))<span  class=" pink lighten-5"> {{ $errors->first('avatar') }} </span>@endif 
    </div> 
     

 
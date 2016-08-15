<div class="input-field col s12 ">
	    <select class="icons" name="avatar">
	     <option value="0">{{old('grupo')}}</option>
	      <option value="img01.jpg" data-icon="{{asset('img/img01.jpg')}}" class="circle">Avatar-01</option>
	      <option value="img02.jpg" data-icon="{{asset('img/img02.jpg')}}" class="circle">Avatar-02</option>
	      <option value="img03.jpg" data-icon="{{asset('img/img03.jpg')}}" class="circle">Avatar-03</option>
	      <option value="img04.jpg" data-icon="{{asset('img/img04.jpg')}}" class="circle">Avatar-04</option>
	      <option value="img05.jpg" data-icon="{{asset('img/img05.jpg')}}" class="circle">Avatar-05</option>
	      <option value="img06.jpg" data-icon="{{asset('img/img06.jpg')}}" class="circle">Avatar-06</option>
	      <option value="img07.jpg" data-icon="{{asset('img/img07.jpg')}}" class="circle">Avatar-07</option>
	      <option value="img08.jpg" data-icon="{{asset('img/img08.jpg')}}" class="circle">Avatar-08</option>
	    </select>
	   @if($errors->first('avatar'))<span  class=" pink lighten-5"> {{ $errors->first('avatar') }} </span>@endif 
</div> 
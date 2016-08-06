        

<div class="row">
	<a class="btn-floating right" href="{{route('agenda.create')}}"><i class="material-icons">add</i></a>
    <form action="{{route('agenda.index')}}" method="GET" autocomplete="off">
		<div class="input-field col s12">
			<input placeholder="Buscar Contacto" name="nombre" id="first_name" type="text" class="validate">
	    </div>
    </form>
</div>
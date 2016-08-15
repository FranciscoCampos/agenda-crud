{{-- BOTONES DE NAVEGACION Y ACCION	 --}}

<a class="btn-floating right  pink lighten-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Favoritos" href="{{route('agenda.create')}}">
<i class="material-icons">stars</i>
</a>

<a class="btn-floating right  blue lighten-1 tooltipped dropdown-button" data-position="top" data-delay="50" data-tooltip="Grupos" href="#" data-activates="dropdown1">
  <i class="material-icons">supervisor_account</i>
</a>
<!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="/agenda?grupo=familia">Familia</a></li>
    <li><a href="/agenda?grupo=amigos">Amigos</a></li>
    <li><a href="/agenda?grupo=trabajo">Trabajo</a></li>
  </ul>

<a class="btn-floating right tooltipped" data-position="top" data-delay="50" data-tooltip="Nuevo" href="{{route('agenda.create')}}">
	<i class="material-icons">add</i>
</a>

<a class="btn-floating right  grey darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Home" href="{{route('agenda.index')}}">
	<i class="material-icons">restore</i>
</a>
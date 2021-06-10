Formulario Crear y Editar.<br/>

@extends('layouts.app')



<label for="name">Nombre</label><br/>
<input type="text" name="name" id="name" value="{{ isset($car->name)?$car->name:'' }}" ><br/>

<label for="color">Color:</label><br/>
<input type="text" name="color" id="color" value="{{ isset($car->color)?$car->color:'' }}"><br/>

<button type="submit" class="btn btn-success" >Save</button>

<a href="{{ url('car') }}">Regresar</a>
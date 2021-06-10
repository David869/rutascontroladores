EDITAR REGISTRO DE AUTOS
@extends('layouts.app')

<form action="{{ url('/car/'. $car->id) }}" method="post">

@csrf
{{ method_field('PUT') }}
@include('car.form')

</form>
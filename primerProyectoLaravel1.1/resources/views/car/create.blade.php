Agregar Registro de Autos<br/>

@extends('layouts.app')

<form action="{{ url('/car') }}" method="post">

@csrf

@include('car.form')

</form>
REGISTRO DE CARROS
@extends('layouts.app')

<a href="{{ url('car/create') }}">Add Car</a>

<table class="table">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Color</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($cars as $car)
            <tr>
                <td> {{ $car->id}} </td>
                <td> {{ $car->name}} </td>
                <td> {{ $car->color}} </td>
                <td><a href="{{ url('/car/'.$car->id.'/edit') }}">Editar</a></td>
                <!--formulario para eliminar-->
                <form method='POST' action="{{ url('/car/'.$car->id) }}">
                    @csrf
                    {{ method_field('DELETE') }} <!--define el metodo que es necesario para eliminar-->
                    <td><input type="submit" class="btn btn-danger" onclick="return confirm('Desea eliminar el registro?')" value="Eliminar"></td>
                </form>
            </tr>
            </tr>
            @endforeach
    </tbody>
</table>
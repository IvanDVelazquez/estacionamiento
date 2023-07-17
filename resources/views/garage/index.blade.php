@extends('layout.app')
@section('title','Garage list')

@section('content')
    <div class="container">
        @forelse ($garages as $garage)
            <div class="card bg-secondary" style="float: left; margin: 10px; width: 16rem; height: 16rem; ">
                <div class="card-body">
                    <h4>Direccion: {{$garage->address}}</h3>
                    <h4>Nombre: {{$garage->name}}</h3>
                </div>
                <div style="padding:10px;"">
                    <a style="width: 100%; margin-bottom: 5px;" href="{{route('car.edit',$garage->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('garage.destroy',$garage->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button style="width: 100%" type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @empty
        <div style="">
            <h2>No data found</h2>
            <a class="btn btn-success" href="{{route('garage.create')}}">Crear Garage</a>
        </div>
        @endforelse
    </div>
@endsection
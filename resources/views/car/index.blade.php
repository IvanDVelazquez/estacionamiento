@extends('layout.app')
@section('title','Car list')

@section('content')
    <div class="container">
        @forelse ($cars as $car)
            <div class="card bg-secondary" style="float: left; margin: 10px; width: 16rem; height: 26rem;">
                @if (!empty($car->image_route))  
                <img src="{{asset('storage/img/'.$car->image_route)}}" height="128"  alt="">
                @endif 
                <div style="padding:10px;" class="card-body">
                    <h4>Marca: {{$car->brand}}</h3>
                    <h4>Modelo: {{$car->model}}</h3>
                    <h4>Patente: {{$car->patent}}</h4>
                    <h4>Garage: {{$car->garage_id}}</h4>
                </div>
                <div style="padding:10px;"">
                    <a style="width: 100%; margin-bottom: 5px;" href="{{route('car.edit',$car->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('car.destroy',$car->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button style="width: 100%" type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @empty
        <div style="">
            <h2>No data found</h2>
            <a class="btn btn-success" href="{{route('garage.create')}}">Crear Auto</a>
        </div>
        @endforelse
    </div>
@endsection
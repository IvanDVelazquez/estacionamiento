@extends('layout.app')
@section('title','Car View')
    
@section('content')
<div class="card" style="align-items: center;">
    <div class="card-body" style="width: 18rem;">
        <h3>Marca: {{$car->brand}}</h3>
        <h3>Modelo: {{$car->model}}</h3>
        <h4>Patente: {{$car->patent}}</h4>
        <h4>Estacionamiento: {{$car->garage_id}}</h4>
    </div>
</div>

@endsection
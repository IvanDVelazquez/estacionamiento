@extends('layout.app')
@section('title','Garage View')
    
@section('content')
<div class="card" style="align-items: center;">
    <div class="card-body" style="width: 18rem;">
        <h3>Marca: {{$garage->address}}</h3>
        <h3>Modelo: {{$garage->name}}</h3>
    </div>
</div>

@endsection
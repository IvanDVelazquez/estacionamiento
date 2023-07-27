@extends('layout.app')

@section('title','User Index')

@section('content')
<div class="container">
    @forelse ($users as $user)
        <div class="card bg-secondary" style="float: left; margin: 10px;">
            <div style="padding:10px;" class="card-body">
                <h4>Nombre: {{$user->name}}</h3>
                <h4>mail: {{$user->email}}</h3>
            </div>
            <div style="padding:10px;"">
                <a style="width: 100%; margin-bottom: 5px;" href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Editar</a>
                {!! Form::open(['route'=>['user.destroy', $user->id], 'method'=>'DELETE', 'files' => true, 'role' => 'form']) !!}
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger w-100']); !!}
                {!! Form::close() !!}
            </div>
        </div>
    @empty
    <div style="">
        <h2>No data found</h2>
        <a class="btn btn-success" href="{{route('user.create')}}">Crear Auto</a>
    </div>
    @endforelse
</div>
@endsection
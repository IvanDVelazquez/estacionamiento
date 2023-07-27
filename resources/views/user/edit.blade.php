@extends('layout.app')

@section('title','User Create')

@section('content')
<div class="card" style="align-items: center;">
    <div class="card-body" style="width: 18rem;">
         
        {!! Form::open(['route'=>'user.store', 'method'=>'POST', 'files' => true, 'role' => 'form']) !!}
                
        {!! Form::label(null, 'Nombre:', array('class' => 'negrita')) !!}
        {!! Form::text('name', $user->name,['class'=>'form-control', 'required' => 'required']) !!}
        
        {!! Form::label(null, 'email:', array('class' => 'negrita')) !!}
        {!! Form::email('email', $user->email,['class'=>'form-control', 'required' => 'required']) !!}

        {!! Form::label(null, 'Contraseña:', array('class' => 'negrita')) !!}
        {!! Form::password('password',null,['class'=>'form-control', 'required' => 'required']) !!}
        
        {!! Form::submit('Guardar!',['class'=>'btn btn-success']); !!}
        
        {!! Form::close() !!}
        <a style="margin-top: 10px;" href="{{route('car.index')}}" class="btn btn-danger">Atras</a>

    </div>
</div>
@endsection
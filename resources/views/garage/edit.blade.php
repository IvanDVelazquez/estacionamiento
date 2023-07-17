@extends('layout.app')
@section('title','Garage create')
    
@section('content')
<div class="card" style="align-items: center;">
    <div class="card-body" style="width: 18rem;">
        <form enctype="multipart/form-data" action=" {{route('garage.update', $garage)}} " method="post">
            @csrf
            <div class="form-group">
                <label>Direccion</label>
                <input  class="form-control" name="brand" type="text" value="{{$garage->address}}"/>
                @error('brand')
                    <p style="color: red"> {{$message}}</p>
                 @enderror
            </div>
            
            <div class="form-group">
                <label>Nombre</label>
                <input  class="form-control" name="model" type="text" value="{{$garage->name}}"/>}
                @error('model')
                    <p style="color: red"> {{$message}}</p>
                @enderror
            </div>

            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <a style="margin-top: 10px;" href="{{route('garage.index')}}" class="btn btn-danger">Atras</a>

    </div>
</div>
@endsection
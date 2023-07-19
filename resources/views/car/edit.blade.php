@extends('layout.app')
@section('title', 'Edit Car')

@section('content')
    <div class="card" style="align-items: center;">
        <div class="card-body" style="width: 18rem;">
            <form action=" {{route('car.update', $car)}} " method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Marca</label>
                    <input  class="form-control" required name="brand" type="text" value="{{$car->brand}}"/>
                    @error('brand')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Modelo</label>
                    <input  class="form-control" required name="model" type="text" value="{{$car->model}}"/>
                    @error('model')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Patente</label>
                    <input  class="form-control" required name="patent" type="text" value="{{$car->patent}}"/>
                    @error('patent')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Añadir imagen</label>
                    <input type="file" required class="form-control" name="image">
                </div>

                <div class="form-group">
                    <label><h4>Garage</h4></label>
                    <select name="garage_id">
                        <option value="">--Please choose an option--</option>
                        @foreach ($garages as $garage)
                        <option value="{{$garage->id}}">{{$garage->name}}</option>
                        @endforeach
                    </select>
                    @error('garage_id')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>

                <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <a style="margin-top: 10px;" href="{{route('car.index')}}" class="btn btn-danger">Atras</a>

        </div>
    </div>
@endsection
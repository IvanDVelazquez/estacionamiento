@extends('layout.app')
@section('title','Car create')

@section('content')
    <div class="card" style="align-items: center;">
        <div class="card-body" style="width: 18rem;">
            <form enctype="multipart/form-data" action=" {{route('car.store')}} " method="post">
                @csrf
                <div class="form-group">
                    <label>Marca</label>
                    <input  class="form-control" name="brand" type="text"/>
                    @error('brand')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Modelo</label>
                    <input  class="form-control" name="model" type="text"/>
                    @error('model')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Patente</label>
                    <input  class="form-control" name="patent" type="text"/>
                    @error('patent')
                    <p style="color: red"> {{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label><h4>Añadir imagen</h4></label>
                    <input type="file" class="form-control" name="image">
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
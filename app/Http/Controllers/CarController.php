<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Garage;
use File;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::where('active', 1)->paginate(10);
        return view('car.index', compact('cars'));
    }


    public function create()
    {
        $garages = Garage::all();
        return view('car.create', compact('garages'));
    }


    public function store(CarRequest $request)
    {
        $car = new Car();
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->patent=$request->patent;
        $car->garage_id=$request->garage_id;

        if(isset($request->image)){
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/img', $fileName);
            $car->image_route= $fileName;
        }else{
            $car->image_route= "";
        }

        $car->save();
        return redirect()->route('car.index');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('car.view',compact('car'));
    }

    public function edit(Car $car)
    {   
        $garages= Garage::all();
        return view('car.edit', compact('car','garages'));
    }

    public function update(CarRequest $request, $id)
    {
        $car = Car::findOrFail($id);

        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->patent=$request->patent;
        $car->garage_id=$request->garage_id;
        
        
        if(isset($request->image)){
            
            if(isset($car->image_route)){
                if(file_exists(public_path('storage/img/'.$car->image_route))){
                    unlink(public_path('storage/img/'.$car->image_route));
                }
            }

            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/img', $fileName);
            $car->image_route= $fileName;
            
        }
        else{
            $car->image_route= "";
        }
        
        $car->save();
        return redirect()->route('car.index');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->active=0;
        $car->save();
        return redirect()->route('car.index');
    }
}

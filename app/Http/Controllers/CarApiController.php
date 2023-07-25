<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Car;

class CarApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $cars = Car::where('active', 1)->paginate(10);
        return response()->json([
            'success'=>true,
            'data'=> $cars
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $car = new Car();
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->patent=$request->patent;
        $car->garage_id=$request->garage_id;
        if(isset($request->image)){
            $car->image_route=$request->image_route;
        }else{
            $car->image_route="";
        }
        $car->save();

        return response()->json([
            'success' => true,
            'data' => $car
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $car=Car::find($id);
        return  response()->json(['data'=>$car],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->brand=$request->brand;
        $car->model=$request->model;
        $car->patent=$request->patent;
        $car->garage_id=$request->garage_id;
        if(isset($request->image)){
            $car->image_route=$request->image_route;
        }else{
            $car->image_route="";
        }
        $car->save();

        return response()->json([
            'success' => true,
            'data' => $car
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->active=0;
        $car->save();
        return response()->json(['success'=>true],200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

class GarageApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::where('active', 1)->paginate(10);
        return response()->json([
            'success'=>true,
            'data'=> $garages
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $garage = new Garage();
        $garage->address=$request->address;
        $garage->name=$request->name;
        $garage->save();

        return response()->json([
            'success' => true,
            'data' => $garage
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garage=Garage::findOrFail($id);
        return  response()->json(['data'=>$garage],200);
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
        $garage = new Garage();
        $garage->address=$request->address;
        $garage->name=$request->name;
        $garage->save();

        return response()->json([
            'success' => true,
            'data' => $garage
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
        $garage = Garage::findOrFail($id);
        $garage->active=0;
        $garage->save();
        return response()->json(["success"=>true],200);
    }
}

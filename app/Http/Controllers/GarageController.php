<?php

namespace App\Http\Controllers;

use App\Http\Requests\GarageRequest;
use App\Models\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garages = Garage::where('active', 1)->paginate(10);
        return view('garage.index', compact('garages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GarageRequest $request)
    {
        $garage = new Garage();

        $garage->address = $request->address;
        $garage->name = $request->name;
        $garage->save();

        return redirect()->route('garage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('garage.view',compact(Garage::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $garage = Garage::all($id);
        return view('garage.edit',compact('garage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GarageRequest $request, $id)
    {
        $garage = Garage::findOrFail($id);

        $garage->address = $request->address;
        $garage->name = $request->name;
        $garage->save();

        return redirect()->route('garge.index');
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
        return redirect()->route('garage.index');
    }
}

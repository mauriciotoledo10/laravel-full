<?php

namespace App\Http\Controllers;

use App\Http\Requests\FurnitureRequest;
use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Furniture::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FurnitureRequest $request)
    {

        $furniture = Furniture::create($request->all());
        return response()->json($furniture);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function show(Furniture $furniture)
    {
        return response()->json($furniture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function update(FurnitureRequest $request, Furniture $furniture)
    {

        $furniture->update($request->all());

        return [
            "status" => 1,
            "data" => $furniture,
            "msg" => "Furniture updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Furniture $furniture)
    {
        $furniture->delete();
        return [
            "status" => 1,
            "data" => $furniture,
            "msg" => "Furniture deleted successfully"
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Starship;
use Illuminate\Http\Request;

class StarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->name)) {
            $name = $request->get('name');
            $starship = Starship::name($name)->paginate(5);
            if ($starship[0] != null) {
                return [
                    'count' => $starship->count(),
                    'results' => $starship
                ];
            } else {
                return "Error: Starship not found";
            }
        }
        return [
            'count' => Starship::count(),
            'results' => Starship::paginate(5)
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Starship  $starship
     * @return \Illuminate\Http\Response
     */
    public function show(Starship $starship)
    {      
        return $starship;
    }

    /**
     * Create a new resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $starship = Starship::create($request->all());
        return $starship;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Starship  $starship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Starship $starship)
    {
        $starship->update($request->all());
        return $starship;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Starship  $starship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Starship $starship)
    {
        $starship->delete();
        return $starship;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planetData = Planet::where('name', $planet)->firstOrFail();

        return view('planet-detail', ['planet' => $planetData]);
    }
}


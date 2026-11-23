<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();

        return view('planets', ['planets' => $planets]);
    }

 public function show($planet)
    {
        $planetData = DB::table('planets')
            ->where('name', $planet)
            ->first();

        abort_if(!$planetData, 404);

        return view('planet-detail', ['planet' => $planetData]);
    }
} 
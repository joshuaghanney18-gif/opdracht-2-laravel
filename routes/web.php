<?php

use Illuminate\Support\Facades\Route;


$planets = [ 
    [ 'name' => 'Mars', 'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.' ], 
    [ 'name' => 'Venus', 'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.' ], 
    [ 'name' => 'Earth', 'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.' ], 
    [ 'name' => 'Jupiter', 'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.' ], 
];


Route::get('/planets', function () use ($planets) {
    $collection = collect($planets);

    if (request()->has('planeet')) {
        $searchPlanet = ucfirst(strtolower(request('planeet')));
        $collection = $collection->where('name', $searchPlanet);
    }

    return view('planets', ['planeten' => $collection->values()->all()]);
});


Route::get('/planets/{planet}', function ($planetName) use ($planets) {
   
    $planet = collect($planets)->first(function ($value) use ($planetName) {
        return strtolower($value['name']) === strtolower($planetName);
    });

   
    if (!$planet) {
        abort(404);
    }

   
    return view('planet-detail', ['planet' => $planet]);
}); 
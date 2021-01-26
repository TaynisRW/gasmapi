<?php

use App\Models\Zipcode;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $states = Zipcode::pluck('d_estado','d_estado');
    return view('front', compact('states'));
});


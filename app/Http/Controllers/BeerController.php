<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    public function index()
    {
        $beers = Beer::all();
        dd($beers);
        return view('beers');
    }

}

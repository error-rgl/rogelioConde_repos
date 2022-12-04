<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // funcion __invoke administra una unica ruta.
    public function __invoke()
    {
        return view('welcome');
    }
}

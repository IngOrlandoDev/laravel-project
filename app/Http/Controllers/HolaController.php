<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index()
    {

        $nombre = "Orlando";
        $apellido = "Arenas";

        return view('hola', compact('nombre','apellido'));
    }
}

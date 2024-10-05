<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        return view('activities.activities');
        // Lógica para mostrar una lista de elementos
    }
}

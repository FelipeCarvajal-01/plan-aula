<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomPlanController extends Controller
{
    // Método para manejar solicitudes GET
    public function index()
    {
        return view('classroomPlan.classroomPlan');
    }
}

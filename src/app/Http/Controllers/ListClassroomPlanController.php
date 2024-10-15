<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListClassroomPlanController extends Controller
{
    // Método para manejar solicitudes GET
    public function index()
    {
        return view('classroomPlan.listClassroomPlan');
    }
}

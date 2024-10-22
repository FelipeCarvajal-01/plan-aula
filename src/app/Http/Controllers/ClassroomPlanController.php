<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class ClassroomPlanController extends Controller
{

    public function index()
    {
        //
        $roles = Rol::orderBy('id')->get();

        return view('classroomPlan.classroomPlan', compact('roles'));
    }
}

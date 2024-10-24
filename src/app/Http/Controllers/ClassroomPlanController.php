<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Program;
use App\Models\Rol;
use Illuminate\Http\Request;

class ClassroomPlanController extends Controller
{

    public function index()
    {

        $programs = Program::orderBy('id')->get();
        $evaluations = Evaluation::orderBy('id')->get();

        return view('classroomPlan.classroomPlan', compact('programs','evaluations'));
    }
}

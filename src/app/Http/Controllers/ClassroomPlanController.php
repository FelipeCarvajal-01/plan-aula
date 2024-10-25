<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Evaluation;
use App\Models\Program;
use App\Models\Rol;
use App\Models\Semester;
use Illuminate\Http\Request;

class ClassroomPlanController extends Controller
{

    public function index()
    {

        $programs = Program::orderBy('id')->get();
        $evaluations = Evaluation::orderBy('id')->get();
        $courses = Course::orderBy('id')->get();
        $semesters = Semester::orderBy('id')->get();

        return view('classroomPlan.classroomPlan', compact('programs', 'evaluations', 'courses', 'semesters'));
    }

    public function  filtersAssignCourse(Request $request)
    {
        $program = $request->input('program');

        $listCurse = Course::where('id_programas', $program)
            ->with([
                'program.faculti',
                'component.field_study',
                'semester',
                'type_course'
            ])->orderBy('id');

        // Verificar si el curso fue encontrado
        if ($listCurse) {
            // Devolver el curso como respuesta en formato JSON
            return response()->json(['listCurse' => $listCurse]);
        } else {
            // Enviar una respuesta de error si el curso no fue encontrado
            return response()->json(['error' => 'Cursos no encontrados'], 404);
        }
    }

    public function visualizeCourse(Request $request)
    {
        // Obtener el ID del curso desde la solicitud
        $cursoId = $request->cursoId;

        // Buscar el curso en la base de datos con todas las relaciones necesarias
        $curse = Course::with([
            'program.faculti',
            'component.field_study',
            'semester',
            'type_course'
        ])->find($cursoId);

        // Verificar si el curso fue encontrado
        if ($curse) {
            // Devolver el curso como respuesta en formato JSON
            return response()->json(['curse' => $curse]);
        } else {
            // Enviar una respuesta de error si el curso no fue encontrado
            return response()->json(['error' => 'Curso no encontrado'], 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ClassroomPlan;
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

    public function filtersAssignCourse(Request $request)
    {
        // Obtener el programa de los datos de la solicitud
        $program = $request->input('programs');

        // Consultar los cursos asociados al programa especificado
        $listCurse = Course::where('id_program', $program)
            ->with([
                'program.faculti', // Cargar la relación con la facultad del programa
                'component.field_study', // Cargar la relación con el campo de estudio del componente
                'semester', // Cargar la relación con el semestre
                'type_course' // Cargar la relación con el tipo de curso
            ])->orderBy('id') // Ordenar los resultados por ID
            ->get(); // Paginación según el número de filas por página

        // Verificar si se encontraron cursos
        if ($listCurse) {
            // Devolver la lista de cursos como respuesta en formato JSON
            return response()->json(['listCurse' => $listCurse]);
        } else {
            // Enviar una respuesta de error si no se encontraron cursos
            return response()->json(['error' => 'Cursos no encontrados'], 404);
        }
    }

    public function listCourses(Request $request)
    {
        // Obtener el ID del curso desde la solicitud
        $component = $request->component;

        // Buscar todos los cursos en la base de datos con todas las relaciones necesarias
        $curses = Course::with([
            'program.faculti',
            'component.field_study',
            'semester',
            'type_course'
        ])->where('id_component', $component)
            ->orderBy('id')
            ->get(); // Obtener todos los cursos

        // Buscar los planes de aula relacionados con los cursos encontrados
        $classroomPlan = ClassroomPlan::with(['course'])
            ->where('id_course', $curses)// Usar pluck para obtener solo los IDs de los cursos
            ->orderBy('id')
            ->get(); // Obtener todos los planes de aula relacionados

        // Verificar si el curso fue encontrado
        if ($classroomPlan) {
            // Devolver el curso como respuesta en formato JSON
            return response()->json(['classroomPlan' => $classroomPlan]);
        } else {
            // Enviar una respuesta de error si el curso no fue encontrado
            return response()->json(['error' => 'Curso no encontrado'], 404);
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

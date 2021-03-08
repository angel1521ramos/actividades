<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests\Actividad as ActividadRequests;


class actividadController extends Controller
{
    protected $actividad;
    public function __construct(Actividad $actividad){
        $this->actividad = $actividad;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $actividad = Actividad::all();
            $longitud = sizeof($actividad);
            if ($longitud == 0) {
                return view('error');

            }else{
                return view('actividad.visualizar', compact('actividad'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividad.añadir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadRequests $request)
    {
        $actividad = $this->actividad->create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        return view('actividad.detalle', compact('actividad'));
    }

    public function downloadPDF($actividad_id)
    {
        $alumno = DB::table('alumnos')
                ->where('actividad_id', '=', $actividad_id)
                ->get();
        $pdf = PDF::loadView('actividad.alumnos', compact('alumno'));
        return $pdf->download('lista_alumnos.pdf');
    }

    public function visualizarPDF($actividad_id)
    {
        $alumno = DB::table('alumnos')
                ->where('actividad_id', '=', $actividad_id)
                ->get();
        $pdf = PDF::loadView('actividad.alumnos', compact('alumno'));
        return $pdf->stream();
    }


    public function downloadPDFactividades()
    {
        $actividad = Actividad::all();
        $pdf = PDF::loadView('actividad.actividades', compact('actividad'));
        return $pdf->download('lista_actividades.pdf');
    }

    public function visualizarPDFactividades()
    {
        $actividad = Actividad::all();
        $pdf = PDF::loadView('actividad.actividades', compact('actividad'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        return view('actividad.editar', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $actividad->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return $this->index();
    }
}

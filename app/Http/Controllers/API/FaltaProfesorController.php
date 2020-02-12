<?php

namespace App\Http\Controllers\API;

use App\FaltaProfesor;
use App\Http\Controllers\Controller;
use App\Http\Resources\FaltaprofesorResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FaltaProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\FaltaProfesor $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function show(FaltaProfesor $faltaProfesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\FaltaProfesor $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaltaProfesor $faltaProfesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\FaltaProfesor $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaltaProfesor $faltaProfesor)
    {
        //
    }

    public function registrarfaltas( $momento_inicio, $momento_final)
    {
        $user = Auth::user();
        $falta_profesor = FaltaProfesor::where('profesor_falta', $user->id)->get()->first();

        $inicio = \Carbon\Carbon::parse($momento_inicio);
        $resultinicio = $inicio->format('Y-m-d H:i:s');
        $resultadoInicio = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $resultinicio);
        $final = \Carbon\Carbon::parse($momento_final);
        $resultfinal = $final->format('Y-m-d H:i:s');
        $resultadoFinal = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $resultfinal);


/*
        DB::table('faltasprofesores')
            ->where("profesor_falta", $falta_profesor->profesores_falta)
            ->create(["periodoclase_id" => '6'], ["created_at" => $resultadoInicio], ["updated_at" => $resultadoFinal]);
        echo $falta_profesor;
*/
    }
}

<?php

namespace App\Http\Controllers\API;

use App\FaltaProfesor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FaltaProfesor  $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function show(FaltaProfesor $faltaProfesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaltaProfesor  $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaltaProfesor $faltaProfesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaltaProfesor  $faltaProfesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaltaProfesor $faltaProfesor)
    {
        //
    }

    public function registrarfaltas(FaltaProfesor $faltaProfesor, $momento_inicio, $momento_final)
    {
        $momento_inicio ->format('Y-m-d');
        $faltas = DB::table('faltasprofesores')->where($momento_inicio, '=', date('Y-m-d'))->get();
    }
}

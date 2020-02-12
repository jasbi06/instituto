<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use App\Materiaimpartida;
use App\Periodoclase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PeriodoclaseResource;

class PeriodoclaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeriodoclaseResource::collection(Periodoclase::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodoclase = json_decode($request->getContent(), true);
        $periodoclase = Tutorizado::create($periodoclase);
        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function show(Periodoclase $periodoclase)
    {
        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodoclase $periodoclase)
    {
        $periodoclase->update(json_decode($request->getContent(), true));
        return new PeriodoclaseResource($periodoclase);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodoclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodoclase $periodoclase)
    {
        $periodoclase->delete();
    }

    public function getHorarioDocente($id)
    {

        $this->authorize('getHorarioDocente', $id);

        if (!Auth::user()->isSuperAdmin()) {
            $id = Auth::id();
        }

        $materiaImpartida = Materiaimpartida::where('docente', $id)->get();

        $horario = Periodoclase::whereIn('materiaimpartida_id', $materiaImpartida->map(function ($item, $key) {
            return $item->id;
        }))->get();

        return  PeriodoclaseResource::collection(($horario));
    }
}

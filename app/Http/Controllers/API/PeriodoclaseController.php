<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Periodosclase;
use Illuminate\Http\Request;
use App\Http\Resources\PeriodoclaseResource;
use Illuminate\Support\Facades\Auth;

class PeriodoclaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeriodoclaseResource::collection(Periodosclase::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodosclase = Periodosclase::create(json_decode($request->getContent(), true));
        return new PeriodoclaseResource($periodosclase);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodosclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function show(Periodosclase $periodosclase)
    {
        return new PeriodoclaseResource($periodosclase);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodosclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodosclase $periodosclase)
    {
        $periodosclase->update(json_decode($request->getContent(), true));
        return new PeriodoclaseResource($periodosclase);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodosclase  $periodoclase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodosclase $periodosclase)
    {
        $periodosclase->delete();
    }

    public function meToca() {

        return Auth::user()->meToca();

    }
}

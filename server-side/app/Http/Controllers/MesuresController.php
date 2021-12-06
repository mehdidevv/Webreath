<?php

namespace App\Http\Controllers;

use App\Models\Mesures;
use App\Http\Requests\StoreMesuresRequest;
use App\Http\Requests\UpdateMesuresRequest;

class MesuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mesures::orderBydesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMesuresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMesuresRequest $request)
    {
        if (Mesures::create($request->all())) {
            return response()->json(
                ['message' => 'Mesure was crated'],
                200
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesures  $mesures
     * @return \Illuminate\Http\Response
     */
    public function show(Mesures $mesures)
    {
        return $mesures;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMesuresRequest  $request
     * @param  \App\Models\Mesures  $mesures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMesuresRequest $request, Mesures $mesures)
    {
        if ($mesures->update(request()->all())) {
            return response()->json(
                ['message' => 'Mesure was updated'],
                200
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesures  $mesures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesures $mesures)
    {
        $mesures->delete();
    }
}

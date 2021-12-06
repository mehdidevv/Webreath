<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Module::orderBydesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModuleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModuleRequest $request)
    {
        if (Module::create($request->all())) {
            return response()->json(
                ['message' => 'Module was crated'],
                200
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return response()->json(
            [
                'module' => $module,
                'mesures' => $module->mesures->pluck('value'),
                'mesures_dates' => $module->mesures->pluck('created_at')->map(
                    function ($item, $key) {
                        return $item->toDateTimeString();
                    },
                ),
                'history' => $module->histories,

            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModuleRequest  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        if ($module->update(request()->all())) {
            return response()->json(
                ['message' => 'Module was updated'],
                200
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
    }
}

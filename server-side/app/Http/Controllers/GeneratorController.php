<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Mesures;
use App\Models\Module;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        foreach ($modules as $key => $module) {
            History::create([
                'module_id' => $module->id,
                "title" => "panne #" . rand(0, 9999),
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.",
            ]);
            Mesures::create([
                'name' => 'London to Paris',
                'module_id' => $module->id,
                'unit' => 'C',
                'value' => rand(0, 50),
            ]);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

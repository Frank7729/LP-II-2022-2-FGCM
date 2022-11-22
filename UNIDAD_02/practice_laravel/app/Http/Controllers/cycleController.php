<?php

namespace App\Http\Controllers;

use App\Http\Requests\cycleteamRequest;
use App\Models\cycle;
use Illuminate\Http\Request;

class cycleController extends Controller
{
    public function index()
    {
        $cycles = cycle::all();
        return response()->json($cycles);
    }

    public function store(cycleteamRequest $request)
    {
        $cycle = cycle::create($request->all());
        return response()->json([
            'message' => "Registro guardado correctamente",
            'cycle' => $cycle,
        ], 200);
    }

    public function update(cycleteamRequest $request, $cycle)
    {
        $cycle = cycle::find($cycle);
        $cycle->update($request->only('name', 'slug'));
        return response()->json([
            'message' => "Registro actualizado correctamente",
            'cycle' => $cycle,
        ], 200);
    }

    public function destroy($cycle)
    {
        $cycle = cycle::find($cycle);
        $cycle->delete();
        return response()->json([
            'message' => "Registro eliminado correctamente",
        ], 200);
    }
}

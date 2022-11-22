<?php

namespace App\Http\Controllers;

use App\Http\Requests\schoolteamRequest;
use App\Models\school;
use Illuminate\Http\Request;

class schoolController extends Controller
{
    public function index()
    {
        $schools = school::all();
        return response()->json($schools);
    }

    public function store(schoolteamRequest $request)
    {
        $school = school::create($request->all());
        return response()->json([
            'message' => "Registro guardado correctamente",
            'school' => $school,
        ], 200);
    }

    public function update(schoolteamRequest $request, $school)
    {
        $school = school::find($school);
        $school->update($request->only('name', 'slug'));
        return response()->json([
            'message' => "Registro actualizado correctamente",
            'school' => $school,
        ], 200);
    }

    public function destroy($school)
    {
        $school = school::find($school);
        $school->delete();
        return response()->json([
            'message' => "Registro eliminado correctamente",
        ], 200);
    }
}

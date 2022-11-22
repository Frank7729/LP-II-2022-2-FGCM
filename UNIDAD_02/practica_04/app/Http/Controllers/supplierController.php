<?php

namespace App\Http\Controllers;

use App\Http\Requests\supplierproductRequest;
use App\Models\supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index()
    {
        $suppliers = supplier::all();
        return response()->json($suppliers);
    }

    public function store(supplierproductRequest $request){
        $supplier=supplier::create($request->all());
        return response()->json([
            'message'=>"Registro guardado correctamente",
            'supplier'=>$supplier,
        ], 200);
    }

    public function update(supplierproductRequest $request, $supplier){
        $supplier=supplier::find($supplier);
        $supplier->update($request->only('name','slug','direction','phone','email','web'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'supplier'=>$supplier,
        ], 200);
    }

    public function destroy($supplier){
        $supplier=supplier::find($supplier);
        $supplier->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente",
        ], 200);
    }
}

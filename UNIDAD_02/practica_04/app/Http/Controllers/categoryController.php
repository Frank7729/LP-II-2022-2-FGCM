<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryproductRequest;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return response()->json($categories);
    }

    public function store(categoryproductRequest $request){
        $category=category::create($request->all());
        return response()->json([
            'message'=>"Registro guardado correctamente",
            'category'=>$category,
        ], 200);
    }

    public function update(categoryproductRequest $request, $category){
        $category=category::find($category);
        $category->update($request->only('name','slug','description'));
        return response()->json([
            'message'=>"Registro actualizado correctamente",
            'category'=>$category,
        ], 200);
    }

    public function destroy($category){
        $category=category::find($category);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente",
        ], 200);
    }
}

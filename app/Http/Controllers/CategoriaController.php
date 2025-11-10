<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:categorias|max:255',
            'descripcion' => 'nullable',
            'fabricante' => 'required|unique:fabricante|max:255',
            'modelo' => 'nullable',
        ]);

        $categoria = Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fabricante' => $request->fabricante,
            'modelo' => $request->modelo
        ]);

        return response()->json([
            'message' => 'Categoría creada exitosamente',
            'categoria' => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json([
                'message' => 'Categoría no encontrada'
            ], 404);
        }

        return view('categorias.show', compact('categoria'));
    }

    public function create(){
        return view('categorias.create');
    }
}

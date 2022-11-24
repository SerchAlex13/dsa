<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::all();
        $users = User::all();
        return view('rols/rolIndex', compact('rols', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rols/rolCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación
        $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $rol = Rol::create($request->all());

        //$prenda->colors()->attach($request->colors_id);
        //$prenda->tallas()->attach($request->tallas_id);

        return redirect('/rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        return view('rols/rolShow', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        //$colors = Color::all();
        //$tallas = Talla::all();
        return view('rols/rolEdit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $rol)
    {
        //Validar
        $request->validate([
            'nombre' => 'required|max:255',
        ]);

        Rol::where('id', $rol->id)->update($request->except('_token', '_method'));
        //$prenda->colors()->sync($request->colors_id);
        //$prenda->tallas()->sync($request->tallas_id);

        //$prenda->tallas()->detach();//Eliminar todos
        //return redirect()->route('prenda.show', $prenda->id);

        return redirect()->route('rol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();

        return redirect('/rol');
    }
}

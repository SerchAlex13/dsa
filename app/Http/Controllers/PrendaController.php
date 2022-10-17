<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prendas = Prenda::all();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prendas/prendaCreate');
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
            'tipo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'color' => 'required|max:255',
            'talla' => 'required|max:255',
            'tela' => 'required|max:255',
            'inventario' => 'integer|min:0'
        ]);

        Prenda::create($request->all());

        return redirect('/prenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prenda  $prenda
     * @return \Illuminate\Http\Response
     */
    public function show(Prenda $prenda)
    {
        return view('prendas/prendaShow', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prenda  $prenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Prenda $prenda)
    {
        return view('prendas/prendaEdit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prenda  $prenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prenda $prenda)
    {
        //Validar
        $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'color' => 'required|max:255',
            'talla' => 'required|max:255',
            'tela' => 'required|max:255',
            'inventario' => 'integer|min:0'
        ]);

        //Actualizar

        // $torneo->nombre = $request->nombre;
        // $torneo->sede = $request->sede;
        // $torneo->organizador = $request->organizador;
        // $torneo->fundacion = $request->fundacion;
        // $torneo->numero_ediciones = $request->numero_ediciones;
        // $torneo->formato = $request->formato;
        // $torneo->numero_equipos = $request->numero_equipos;
        // $torneo->save();

        //Torneo::where('id', $torneo->id)->update($request->all());

        //Torneo::where('id', '!=', $torneo->id)->update($request->except('_token', '_method'));

        Prenda::where('id', $prenda->id)->update($request->except('_token', '_method'));

        return redirect('/prenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prenda  $prenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prenda $prenda)
    {
        $prenda->delete();

        return redirect('/prenda');
    }
}

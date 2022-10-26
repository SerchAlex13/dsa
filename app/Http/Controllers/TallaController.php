<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallas = Talla::all();

        return view('tallas/tallaIndex', compact('tallas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tallas/tallaCreate');
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

        Talla::create($request->all());

        return redirect('/talla');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function show(Talla $talla)
    {
        return view('tallas/tallaShow', compact('talla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function edit(Talla $talla)
    {
        return view('tallas/tallaEdit', compact('talla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talla $talla)
    {
        //Validación
        $request->validate([
            'nombre' => 'required|max:255',
        ]);

        //Actualizar
        Talla::where('id', $talla->id)->update($request->except('_token', '_method'));

        return redirect('/talla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talla  $talla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talla $talla)
    {
        $talla->delete();

        return redirect('/talla');
    }
}

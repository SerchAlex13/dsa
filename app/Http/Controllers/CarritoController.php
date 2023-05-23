<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritos = Carrito::where([['user_id', Auth::id()], ['estado', 'En el carrito']])->get();

        return view('carritos/carritoIndex', compact('carritos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'prenda_id' => 'required',
            'color' => 'required',
            'talla' => 'required',
            'cantidad' => 'required',
            'total' => 'required',
        ]);

        $request->merge(['user_id' => Auth::id()]);

        Carrito::create($request->all());

        toast('Se agregó al carrito','success')->position('bottom-end');

        return redirect()->route('prenda.show', $request->prenda_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //Validar
        $request->validate([
            'estado' => 'required',
        ]);

        Carrito::where('id', $carrito->id)->update($request->except('_token', '_method'));

        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
        

        return redirect('/carrito');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Mail\PedidoRealizado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::where('user_id', Auth::id())->get();
        $carritos = Carrito::where('user_id', Auth::id())->get();

        return view('pedidos/pedidoIndex', compact('pedidos', 'carritos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarPedidos()
    {
        $pedidos = Pedido::get();
        $carritos = Carrito::get();

        return view('pedidos/pedidoIndex', compact('pedidos', 'carritos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'domicilio' => 'required',
            'total' => 'required',
        ]);

        $request->merge(['user_id' => Auth::id()]);

        $pedido = Pedido::create($request->all());

        // $pedido->carritos()->attach($request->carritos_id);

        $estados = DB::table('carritos')->where('estado', 'En el carrito')->update(['estado' => 'Pedido']);

        // $deleted = DB::table('carritos')->where('user_id', Auth::id())->delete();

        Mail::to(Auth::user()->email)->send(new PedidoRealizado($pedido));

        alert()->success('Éxito','Se realizó el pedido correctamente');

        return redirect()->route('pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}

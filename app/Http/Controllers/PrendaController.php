<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Talla;
use App\Models\Prenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PrendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prendas = Prenda::all();
        //$prendas = Prenda::where('user_id', Auth::id())->get();//Para mostrar prendas sólo de el usuario logeado
        //$eventos = Auth::user()->eventos;//Para mostrar prendas sólo de el usuario logeado
        return view('prendas/prendaIndex', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Gate::inspect('crea-prenda');
 
        if ($response->allowed()) {
            $colors = Color::all();
            $tallas = Talla::all();
            return view('prendas/prendaCreate', compact('colors', 'tallas'));
        } else {
            echo $response->message();
        }
        
        
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
            'codigo' => 'required|max:255',
            'tipo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'tela' => 'required|max:255',
            'precio' => 'required|min:0',
            'inventario' => 'integer|min:0'
        ]);

        //$request->merge(['user_id' => Auth::id()]);
        $prenda = Prenda::create($request->all());

        $prenda->colors()->attach($request->colors_id);
        $prenda->tallas()->attach($request->tallas_id);

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
        if (! Gate::allows('edita-prenda')) {
            abort(403);
        }
        
        $colors = Color::all();
        $tallas = Talla::all();
        return view('prendas/prendaEdit', compact('prenda', 'colors', 'tallas'));
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
            'codigo' => 'required|max:255',
            'tipo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'tela' => 'required|max:255',
            'precio' => 'required|min:0',
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

        Prenda::where('id', $prenda->id)->update($request->except('_token', '_method', 'colors_id', 'tallas_id'));
        $prenda->colors()->sync($request->colors_id);
        $prenda->tallas()->sync($request->tallas_id);
        //$prenda->tallas()->detach();//Eliminar todos
        //return redirect()->route('prenda.show', $prenda->id);
        return redirect()->route('prenda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prenda  $prenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prenda $prenda)
    {
        $this->authorize('delete', $prenda);
        //$prenda->tallas()->detach();
        $prenda->delete();

        return redirect('/prenda');
    }
}

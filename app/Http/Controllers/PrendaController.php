<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Talla;
use App\Models\Prenda;
use App\Models\Archivo;
use App\Mail\NuevaPrenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PrendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show',
            'mostrarPlayeras', 'mostrarShorts', 'mostrarAccesorios', 'mostrarSombreros', 'mostrarBolsas', 'mostrarMandiles');
        $this->middleware('verified')->except('index', 'show',
            'mostrarPlayeras', 'mostrarShorts', 'mostrarAccesorios', 'mostrarSombreros', 'mostrarBolsas', 'mostrarMandiles');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        $prendas = Prenda::with('colors', 'tallas', 'archivos')->get();
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
        $this->authorize('create', App\Models\Prenda::class);
 
        $colors = Color::all();
        $tallas = Talla::all();

        return view('prendas/prendaCreate', compact('colors', 'tallas'));
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
        ]);

        if ($request->hasFile('archivos')) {
            //$request->merge(['user_id' => Auth::id()]);
            $prenda = Prenda::create($request->all());

            $prenda->colors()->attach($request->colors_id);
            $prenda->tallas()->attach($request->tallas_id);

            //Mail::to('admin@ejemplo.com')->send(new NuevaPrenda($prenda));

        
            //Archivos
            $archivos = $request->file('archivos');

            
            foreach ($archivos as $archivo) {
                if ($archivo->isValid()) {
                    $ubicacion = $archivo->storeAs('public/' . $prenda->id . '/', $archivo->getClientOriginalName());

                    $foto = new Archivo();
                    $foto->ubicacion = $ubicacion;
                    $foto->nombre_original = $archivo->getClientOriginalName();
                    $foto->mime = $archivo->getClientMimeType();

                    $prenda->archivos()->save($foto);
                }
            }

            alert()->success('Éxito','Se guardó la prenda correctamente');

            return redirect()->route('prenda.show', $prenda->id);
            
        } else {
            alert()->error('Error','Faltaron campos por llenar');

            return back();
        }
        
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
        $this->authorize('update', $prenda);
        
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
        return redirect()->route('prenda.show', $prenda->id);
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
        foreach ($prenda->archivos as $archivo) {
            unlink(public_path('storage/' . $prenda->id . '/' . $archivo->nombre_original));
        }
        $prenda->delete();

        return redirect('/prenda');
    }

    public function notificarNuevaPrenda(User $user, Prenda $prenda)
    {
        //Mail::to($evento->user->email)->send(new NotificaEvento($evento));

        Mail::to($user->email)->send(new NuevaPrenda($user, $prenda));

        return back();
    }

    public function descargaArchivo(Archivo $archivo)
    {
        return Storage::download($archivo->ubicacion);
    }

    public function mostrarPlayeras()
    {
        $prendas = Prenda::where('tipo', 'Playera')->with('colors', 'tallas', 'archivos')->get();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    public function mostrarShorts()
    {
        $prendas = Prenda::where('tipo', 'Short')->with('colors', 'tallas', 'archivos')->get();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    public function mostrarSombreros()
    {
        $prendas = Prenda::where('tipo', 'Sombrero')->with('colors', 'tallas', 'archivos')->get();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    public function mostrarBolsas()
    {
        $prendas = Prenda::where('tipo', 'Bolsa')->with('colors', 'tallas', 'archivos')->get();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    public function mostrarMandiles()
    {
        $prendas = Prenda::where('tipo', 'Mandil')->with('colors', 'tallas', 'archivos')->get();
        return view('prendas/prendaIndex', compact('prendas'));
    }

    public function mostrarAccesorios()
    {
        $prendas = Prenda::where('tipo', 'Sombrero')->orWhere('tipo', 'Bolsa')->orWhere('tipo', 'Mandil')
        ->with('colors', 'tallas', 'archivos')->get();
            
        return view('prendas/prendaIndex', compact('prendas'));
    }
}

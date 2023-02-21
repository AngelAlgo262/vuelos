<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use App\Models\Aerolinea;
use App\Models\Destino;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

/**
 * Class VueloController
 * @package App\Http\Controllers
 */
class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelos = Vuelo::paginate();

        return view('vuelo.index', compact('vuelos'))
            ->with('i', (request()->input('page', 1) - 1) * $vuelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vuelo = new Vuelo();
        $aerolineas = Aerolinea::pluck('nombre','id');
        $destinos = Destino::pluck('nombre_cuidad_destino', 'id');
        //$vuelo = $aerolineas . $destinos;
        
        
        return view('vuelo.create', compact('vuelo', 'aerolineas','destinos'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vuelo = request()->except('_token');
        /* return response()->json($vuelo); */
        request()->validate(Vuelo::$rules);
        $vuelo = Vuelo::create($vuelo);
        //$vuelo = Vuelo::create($request->all());
        
        return redirect()->route('vuelos.index')
            ->with('success', 'Vuelo creado.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vuelo = Vuelo::find($id);

        return view('vuelo.show', compact('vuelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vuelo = Vuelo::find($id);
        $aerolineas = Aerolinea::pluck('nombre','id');
        $destinos = Destino::pluck('nombre_cuidad_destino', 'id');

        return view('vuelo.edit', compact('vuelo', 'aerolineas', 'destinos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vuelo $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        request()->validate(Vuelo::$rules);

        $vuelo->update($request->all());

        return redirect()->route('vuelos.index')
            ->with('success', 'Vuelo actualizado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vuelo = Vuelo::find($id)->delete();

        return redirect()->route('vuelos.index')
            ->with('success', 'Vuelo borrado.');
    }
}

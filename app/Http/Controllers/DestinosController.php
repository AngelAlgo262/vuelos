<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

/**
 * Class DestinoController
 * @package App\Http\Controllers
 */
class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = Destino::paginate();

        return view('destino.index', compact('destinos'))
            ->with('i', (request()->input('page', 1) - 1) * $destinos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destino = new Destino();
        return view('destino.create', compact('destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Destino::$rules);

        $destino = Destino::create($request->all());

        return redirect()->route('destinos.index')
            ->with('success', 'Destino creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destino = Destino::find($id);

        return view('destino.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destino = Destino::find($id);

        return view('destino.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Destino $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destino $destino)
    {
        request()->validate(Destino::$rules);

        $destino->update($request->all());

        return redirect()->route('destinos.index')
            ->with('success', 'Destino actualizado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $destino = Destino::find($id)->delete();

        return redirect()->route('destinos.index')
            ->with('success', 'Destino borrado.');
    }
}

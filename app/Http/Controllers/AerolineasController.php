<?php

namespace App\Http\Controllers;

use App\Models\Aerolinea;
use Illuminate\Http\Request;

/**
 * Class AerolineaController
 * @package App\Http\Controllers
 */
class AerolineasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aerolineas = Aerolinea::paginate();

        return view('aerolinea.index', compact('aerolineas'))
            ->with('i', (request()->input('page', 1) - 1) * $aerolineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aerolinea = new Aerolinea();
        return view('aerolinea.create', compact('aerolinea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aerolinea::$rules);

        $aerolinea = Aerolinea::create($request->all());

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aerolinea = Aerolinea::find($id);

        return view('aerolinea.show', compact('aerolinea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aerolinea = Aerolinea::find($id);

        return view('aerolinea.edit', compact('aerolinea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aerolinea $aerolinea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aerolinea $aerolinea)
    {
        request()->validate(Aerolinea::$rules);

        $aerolinea->update($request->all());

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea actualizada.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aerolinea = Aerolinea::find($id)->delete();

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea borrada.');
    }
}

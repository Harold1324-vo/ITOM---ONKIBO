<?php

namespace App\Http\Controllers;

use App\Models\ArtesMarciale;
use App\Models\Equipo;
use Illuminate\Http\Request;

/**
 * Class ArtesMarcialeController
 * @package App\Http\Controllers
 */
class ArtesMarcialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artesMarciales = ArtesMarciale::paginate();
        $equipos=Equipo::select('*')->get();
        return view('artes-marciale.index', compact('artesMarciales', 'equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $artesMarciales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artesMarciale = new ArtesMarciale();
        $equipos=Equipo::select('*')->get();
        return view('artes-marciale.create', compact('artesMarciale', 'equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ArtesMarciale::$rules);

        $artesMarciale = ArtesMarciale::create($request->all());

        return redirect()->route('artesMarciales.index')
            ->with('success', 'Registro con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artesMarciale = ArtesMarciale::find($id);

        return view('artes-marciale.show', compact('artesMarciale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artesMarciale = ArtesMarciale::find($id);
        $equipos=Equipo::select('*')->get();
        return view('artes-marciale.edit', compact('artesMarciale', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ArtesMarciale $artesMarciale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtesMarciale $artesMarciale)
    {
        request()->validate(ArtesMarciale::$rules);

        $artesMarciale->update($request->all());

        return redirect()->route('artesMarciales.index')
            ->with('success', 'Registro actualizado con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $artesMarciale = ArtesMarciale::find($id)->delete();

        return redirect()->route('artesMarciales.index')
            ->with('success', 'Registro eliminado con éxito.');
    }
}

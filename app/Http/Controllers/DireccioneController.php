<?php

namespace App\Http\Controllers;

use App\Models\Direccione;
use App\Models\Escuela;
use App\Models\Seminario;
use App\Models\Torneo;
use Illuminate\Http\Request;

/**
 * Class DireccioneController
 * @package App\Http\Controllers
 */
class DireccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccione::paginate();
        $escuelas=Escuela::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('direccione.index', compact('direcciones', 'escuelas', 'seminarios', 'torneos'))
            ->with('i', (request()->input('page', 1) - 1) * $direcciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direccione = new Direccione();
        $escuelas=Escuela::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('direccione.create', compact('direccione', 'escuelas', 'seminarios', 'torneos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Direccione::$rules);

        $direccione = Direccione::create($request->all());

        return redirect()->route('direcciones.index')
            ->with('success', 'Dirección creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direccione = Direccione::find($id);

        return view('direccione.show', compact('direccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccione = Direccione::find($id);
        $escuelas=Escuela::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('direccione.edit', compact('direccione', 'escuelas', 'seminarios', 'torneos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Direccione $direccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccione $direccione)
    {
        request()->validate(Direccione::$rules);

        $direccione->update($request->all());

        return redirect()->route('direcciones.index')
            ->with('success', 'Direccion actualizada con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $direccione = Direccione::find($id)->delete();

        return redirect()->route('direcciones.index')
            ->with('success', 'Dirección eliminada con éxito.');
    }
}

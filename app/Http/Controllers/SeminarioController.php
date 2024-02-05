<?php

namespace App\Http\Controllers;

use App\Models\Seminario;
use Illuminate\Http\Request;

/**
 * Class SeminarioController
 * @package App\Http\Controllers
 */
class SeminarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminarios = Seminario::paginate();

        return view('seminario.index', compact('seminarios'))
            ->with('i', (request()->input('page', 1) - 1) * $seminarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seminario = new Seminario();
        return view('seminario.create', compact('seminario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Seminario::$rules);

        $seminario = Seminario::create($request->all());

        return redirect()->route('seminarios.index')
            ->with('success', 'Registro creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seminario = Seminario::find($id);

        return view('seminario.show', compact('seminario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seminario = Seminario::find($id);

        return view('seminario.edit', compact('seminario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Seminario $seminario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminario $seminario)
    {
        request()->validate(Seminario::$rules);

        $seminario->update($request->all());

        return redirect()->route('seminarios.index')
            ->with('success', 'Registro actualizado con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $seminario = Seminario::find($id)->delete();

        return redirect()->route('seminarios.index')
            ->with('success', 'Registro eliminado con éxito.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profesore;
use App\Models\ArtesMarciale;
use App\Models\Alumno;
use App\Models\Seminario;
use App\Models\Examene;
use App\Models\Servicio;
use App\Models\Pago;
use App\Models\Escuela;
use Illuminate\Http\Request;

/**
 * Class ProfesoreController
 * @package App\Http\Controllers
 */
class ProfesoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesore::paginate();
        $alumnos = Alumno::select('*')->get();
        $artes=ArtesMarciale::select('*')->get();   
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        return view('profesore.index', compact('profesores', 'alumnos', 'escuelas', 'pagos', 'artes', 
        'examenes', 'seminarios', 'servicios'))
            ->with('i', (request()->input('page', 1) - 1) * $profesores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesore = new Profesore();
        $alumnos = Alumno::select('*')->get();
        $artes=ArtesMarciale::select('*')->get();   
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        return view('profesore.create', compact('profesore', 'alumnos', 'escuelas', 'pagos', 'artes', 
        'examenes', 'seminarios', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Profesore::$rules);

        $profesore = Profesore::create($request->all());

        return redirect()->route('profesores.index')
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
        $profesore = Profesore::find($id);

        return view('profesore.show', compact('profesore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesore = Profesore::find($id);
        $alumnos = Alumno::select('*')->get();
        $artes=ArtesMarciale::select('*')->get();    
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        return view('profesore.edit', compact('profesore', 'alumnos', 'escuelas', 'pagos', 'artes', 
        'examenes', 'seminarios', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Profesore $profesore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesore $profesore)
    {
        request()->validate(Profesore::$rules);

        $profesore->update($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'Registro actualizado con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $profesore = Profesore::find($id)->delete();

        return redirect()->route('profesores.index')
            ->with('success', 'Registro eliminado con éxito.');
    }
}

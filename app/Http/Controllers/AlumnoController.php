<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\ArtesMarciale;
use App\Models\Direccione;
use App\Models\Equipo;
use App\Models\Escuela;
use App\Models\Examene;
use App\Models\Pago;
use App\Models\Seminario;
use App\Models\Servicio;
use App\Models\Torneo;
use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate();
        $artes=ArtesMarciale::select('*')->get();
        $direcciones=Direccione::select('*')->get();
        $equipos=Equipo::select('*')->get();
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('alumno.index', compact('alumnos', 'escuelas', 'pagos', 'artes', 'direcciones',
        'equipos', 'examenes', 'seminarios', 'servicios', 'torneos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        $artes=ArtesMarciale::select('*')->get();
        $direcciones=Direccione::select('*')->get();
        $equipos=Equipo::select('*')->get();
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('alumno.create', compact('alumno', 'escuelas', 'pagos', 'artes', 'direcciones',
        'equipos', 'examenes', 'seminarios', 'servicios', 'torneos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')
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
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $artes=ArtesMarciale::select('*')->get();
        $direcciones=Direccione::select('*')->get();
        $equipos=Equipo::select('*')->get();
        $escuelas=Escuela::select('*')->get();
        $examenes=Examene::select('*')->get();
        $pagos=Pago::select('*')->get();
        $seminarios=Seminario::select('*')->get();
        $servicios=Servicio::select('*')->get();
        $torneos=Torneo::select('*')->get();
        return view('alumno.edit', compact('alumno', 'escuelas', 'pagos', 'artes', 'direcciones',
        'equipos', 'examenes', 'seminarios', 'servicios', 'torneos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Resgitro actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Resgitro eliminado con éxito');
    }
}

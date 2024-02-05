<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesore
 *
 * @property $idProfesor
 * @property $nombres
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $idArteMarcial
 * @property $idAlumno
 * @property $idSeminario
 * @property $idExamen
 * @property $idServicio
 * @property $idPago
 * @property $idEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Artesmarciale $artesmarciale
 * @property Escuela $escuela
 * @property Examene $examene
 * @property Pago $pago
 * @property Seminario $seminario
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesore extends Model
{
    protected $primaryKey = 'idProfesor';
    protected $table = 'Profesores';     
    protected $fillable = ['idProfesor','nombres','apellidoPaterno','apellidoMaterno','idArteMarcial','idAlumno','idSeminario','idExamen','idServicio','idPago','idEscuela'];
    public static $rules = [
		'idProfesor' => 'required',
		'nombres' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
		'idArteMarcial' => 'required',
		'idAlumno' => 'required',
		'idSeminario' => 'required',
		'idExamen' => 'required',
		'idServicio' => 'required',
		'idPago' => 'required',
		'idEscuela' => 'required',
    ];    protected $guarded = ['_token'];
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->belongsTo('App\Models\Alumno', 'idAlumno', 'idAlumno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artesmarciale()
    {
        return $this->belongsTo('App\Models\ArtesMarciale', 'idArteMarcial', 'idArteMarcial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela', 'idEscuela', 'idEscuela');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function examene()
    {
        return $this->belongsTo('App\Models\Examene', 'idExamen', 'idExamen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->belongsTo('App\Models\Pago', 'idPago', 'idPago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seminario()
    {
        return $this->belongsTo('App\Models\Seminario', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio', 'idServicio', 'idServicio');
    }
    

}

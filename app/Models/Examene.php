<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Examene
 *
 * @property $idExamen
 * @property $fechaExamen
 * @property $nombreSinodal
 * @property $gradoObtenido
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Examene extends Model
{
    protected $primaryKey = 'idExamen';
    protected $table = 'Examenes';     
    protected $fillable = ['idExamen','fechaExamen','nombreSinodal','gradoObtenido'];
    public static $rules = [
		'idExamen' => 'required',
		'fechaExamen' => 'required',
		'nombreSinodal' => 'required',
		'gradoObtenido' => 'required',
    ];
    protected $guarded = ['_token'];
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->belongsTo('App\Models\Alumno', 'idExamen', 'idExamen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesore', 'idExamen', 'idExamen');
    }
    

}
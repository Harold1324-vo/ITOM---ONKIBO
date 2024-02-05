<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $idServicio
 * @property $fecha
 * @property $horasRealizadas
 * @property $actividadHecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    protected $primaryKey = 'idServicio';
    protected $table = 'Servicios';     
    protected $fillable = ['idServicio','fecha','horasRealizadas','actividadHecha'];
    public static $rules = [
		'idServicio' => 'required',
		'fecha' => 'required',
		'horasRealizadas' => 'required',
		'actividadHecha' => 'required',
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
        return $this->belongsTo('App\Models\Alumno', 'idServicio', 'idServicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesore', 'idServicio', 'idServicio');
    }
    

}

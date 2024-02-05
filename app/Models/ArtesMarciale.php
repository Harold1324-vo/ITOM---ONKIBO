<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtesMarciale
 *
 * @property $idArteMarcial
 * @property $tipoDiciplina
 * @property $fechaInscripcion
 * @property $fechaDesercion
 * @property $fechaReincorporacion
 * @property $idEquipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Equipo $equipo
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ArtesMarciale extends Model
{
    protected $primaryKey = 'idArteMarcial';
    protected $table = 'ArtesMarciales';     
    protected $fillable= [
        'idArteMarcial',
        'tipoDiciplina',
        'fechaInscripcion',
        'fechaDesercion',
        'fechaReincorporacion',
        'idEquipo'

    ];
    public static $rules = [
		'idArteMarcial' => 'required',
		'tipoDiciplina' => 'required',
		'fechaInscripcion' => 'required',
		'fechaDesercion' => 'required',
		'fechaReincorporacion' => 'required',
		'idEquipo' => 'required',
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
        return $this->belongsTo('App\Models\Alumno', 'idArteMarcial', 'idArteMarcial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->belongsTo('App\Models\Equipo', 'idEquipo', 'idEquipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesore', 'idArteMarcial', 'idArteMarcial');
    }
    

}

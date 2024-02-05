<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Torneo
 *
 * @property $idTorneo
 * @property $fechaTorneo
 * @property $precioTorneo
 * @property $numeroPeleas
 * @property $resultado
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Direccione[] $direcciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Torneo extends Model
{
    protected $primaryKey = 'idTorneo';
    protected $table = 'Torneos';     
    protected $fillable = ['idTorneo','fechaTorneo','precioTorneo','numeroPeleas','resultado'];
    public static $rules = [
		'idTorneo' => 'required',
		'fechaTorneo' => 'required',
		'precioTorneo' => 'required',
		'numeroPeleas' => 'required',
		'resultado' => 'required',
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
        return $this->belongsTo('App\Models\Alumno', 'idTorneo', 'idTorneo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direcciones()
    {
        return $this->belongsTo('App\Models\Direccione', 'idTorneo', 'idTorneo');
    }
    

}

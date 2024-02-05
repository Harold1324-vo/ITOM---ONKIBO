<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccione
 *
 * @property $idDireccion
 * @property $nombreEstado
 * @property $municipio
 * @property $colonia
 * @property $calle
 * @property $cp
 * @property $numeroExterior
 * @property $idSeminario
 * @property $idTorneo
 * @property $idEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Escuela $escuela
 * @property Seminario $seminario
 * @property Torneo $torneo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Direccione extends Model
{
    protected $primaryKey = 'idDireccion';
    protected $table = 'Direcciones';     
    protected $fillable = ['idDireccion','nombreEstado','municipio','colonia','calle','cp','numeroExterior','idSeminario','idTorneo','idEscuela'];
    static $rules = [
		'idDireccion' => 'required',
		'nombreEstado' => 'required',
		'municipio' => 'required',
		'colonia' => 'required',
		'calle' => 'required',
		'cp' => 'required',
		'numeroExterior' => 'required',
		'idSeminario' => 'required',
		'idTorneo' => 'required',
		'idEscuela' => 'required',
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
        return $this->belongsTo('App\Models\Alumno', 'idDireccion', 'idDireccion');
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
    public function seminario()
    {
        return $this->belongsTo('App\Models\Seminario', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function torneo()
    {
        return $this->belongsTo('App\Models\Torneo', 'idTorneo', 'idTorneo');
    }
    

}
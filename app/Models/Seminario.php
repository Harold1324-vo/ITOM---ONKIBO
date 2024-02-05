<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seminario
 *
 * @property $idSeminario
 * @property $fechaSeminario
 * @property $precioSeminario
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Direccione[] $direcciones
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seminario extends Model
{
    protected $primaryKey = 'idSeminario';
    protected $table = 'Seminarios';     
    protected $fillable = ['idSeminario','fechaSeminario','precioSeminario'];
    public static $rules = [
		'idSeminario' => 'required',
		'fechaSeminario' => 'required',
		'precioSeminario' => 'required',
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
        return $this->belongsTo('App\Models\Alumno', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direcciones()
    {
        return $this->belongsTo('App\Models\Direccione', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesore', 'idSeminario', 'idSeminario');
    }
    

}
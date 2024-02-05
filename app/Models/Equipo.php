<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $idEquipo
 * @property $nombreEquipo
 * @property $cantidad
 * @property $precio
 * @property $cantidadExistencia
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Artesmarciale[] $artesmarciales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
  protected $primaryKey = 'idEquipo';
  protected $table = 'Equipos';     
  protected $fillable = ['idEquipo','nombreEquipo','cantidad','precio','cantidadExistencia','color'];
  public static $rules = [
		'idEquipo' => 'required',
		'nombreEquipo' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'cantidadExistencia' => 'required',
		'color' => 'required',
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
    public function artesmarciales()
    {
        return $this->belongsTo('App\Models\ArtesMarciale', 'idEquipo', 'idEquipo');
    }
    

}
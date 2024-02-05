<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $idAlumno
 * @property $nombre
 * @property $apellidopaterno
 * @property $apellidomaterno
 * @property $idDireccion
 * @property $idArteMarcial
 * @property $idTorneo
 * @property $idSeminario
 * @property $idExamen
 * @property $idServicio
 * @property $idPago
 * @property $idEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Artesmarciale $artesmarciale
 * @property Direccione $direccione
 * @property Escuela $escuela
 * @property Examene $examene
 * @property Pago $pago
 * @property Profesore[] $profesores
 * @property Seminario $seminario
 * @property Servicio $servicio
 * @property Torneo $torneo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{

    protected $primaryKey = 'idAlumno';
    protected $table = 'Alumnos';     
    protected $fillable = ['idAlumno','nombre','apellidopaterno','apellidomaterno','idDireccion','idArteMarcial','idTorneo','idSeminario','idExamen','idServicio','idPago','idEscuela'];
    public static $rules= ['idAlumno' => 'required',
    'nombre' => 'required',
    'apellidopaterno' => 'required',
    'apellidomaterno' => 'required',
    'idDireccion' => 'required',
    'idArteMarcial' => 'required',
    'idTorneo' => 'required',
    'idSeminario' => 'required',
    'idExamen' => 'required',
    'idServicio' => 'required',
    'idPago' => 'required',
    'idEscuela' => 'required',];
    protected $guarded = ['_token'];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    


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
    public function direccione()
    {
        return $this->belongsTo('App\Models\Direccione', 'idDireccion', 'idDireccion');
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->belongsTo('App\Models\Profesore', 'idAlumno', 'idAlumno');
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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function torneo()
    {
        return $this->belongsTo('App\Models\Torneo', 'idTorneo', 'idTorneo');
    }
    

}
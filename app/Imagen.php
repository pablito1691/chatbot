<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idimagenes
 * @property int $vehiculos_idvehiculos
 * @property string $ruta
 * @property Vehiculo $vehiculo
 */
class Imagen extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'imagenes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idimagenes';

    /**
     * @var array
     */
    protected $fillable = ['vehiculos_idvehiculos', 'ruta'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehiculo()
    {
        return $this->belongsTo('App\Vehiculo', 'vehiculos_idvehiculos', 'idvehiculos');
    }
}

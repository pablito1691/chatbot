<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcolores
 * @property string $descripcion
 * @property Vehiculo[] $vehiculos
 */
class Color extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'colores';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idcolores';

    /**
     * @var array
     */
    protected $fillable = ['descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo', 'colores_idcolores', 'idcolores');
    }
}

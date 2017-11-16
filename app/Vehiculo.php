<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idvehiculos
 * @property int $colores_idcolores
 * @property int $versiones_idversiones
 * @property string $descripcion
 * @property float $kilometros
 * @property float $precio
 * @property int $destacado
 * @property int $year
 * @property Color $colore
 * @property Version $versione
 * @property Imagen[] $imagenes
 */
class Vehiculo extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idvehiculos';

    /**
     * @var array
     */
    protected $fillable = ['colores_idcolores', 'versiones_idversiones', 'descripcion', 'kilometros', 'precio', 'year', 'destacado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Color', 'colores_idcolores', 'idcolores');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function version()
    {
        return $this->belongsTo('App\Version', 'versiones_idversiones', 'idversiones');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imagenes()
    {
        return $this->hasMany('App\Imagen', 'vehiculos_idvehiculos', 'idvehiculos');
    }
}

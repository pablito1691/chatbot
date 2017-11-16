<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idmodelos
 * @property int $marcas_idmarcas
 * @property string $descripcion
 * @property Marca $marca
 * @property Versione[] $versiones
 */
class Modelo extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idmodelos';

    /**
     * @var array
     */
    protected $fillable = ['marcas_idmarcas', 'descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo('App\Marca', 'marcas_idmarcas', 'idmarcas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function versiones()
    {
        return $this->hasMany('App\Version', 'modelos_idmodelos', 'idmodelos');
    }
}

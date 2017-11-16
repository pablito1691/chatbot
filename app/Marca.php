<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idmarcas
 * @property string $descripcion
 * @property Modelo[] $modelos
 */
class Marca extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idmarcas';

    /**
     * @var array
     */
    protected $fillable = ['descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany('App\Modelo', 'marcas_idmarcas', 'idmarcas');
    }
}

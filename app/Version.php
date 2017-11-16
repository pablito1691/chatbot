<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idversiones
 * @property int $modelos_idmodelos
 * @property string $descripcion
 * @property Modelo $modelo
 * @property Vehiculo[] $vehiculos
 * @property VersionesHasAtributo[] $versionesHasAtributos
 */
class Version extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'versiones';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idversiones';

    /**
     * @var array
     */
    protected $fillable = ['modelos_idmodelos', 'descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modelo()
    {
        return $this->belongsTo('App\Modelo', 'modelos_idmodelos', 'idmodelos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo', 'versiones_idversiones', 'idversiones');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function versionesHasAtributos()
    {
        return $this->hasMany('App\VersionesHasAtributo', 'versiones_idversiones', 'idversiones');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destino
 *
 * @property $id
 * @property $nombre_cuidad_destino
 * @property $pais_destino
 * @property $observaciones
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Vuelo[] $vuelos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Destino extends Model
{
    
    static $rules = [
		'nombre_cuidad_destino' => 'required',
		'pais_destino' => 'required',
		'observaciones' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cuidad_destino','pais_destino','observaciones','estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vuelos()
    {
        return $this->hasMany('App\Models\Vuelo', 'destino_id', 'id');
    }
    

}

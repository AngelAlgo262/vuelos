<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aerolinea
 *
 * @property $id
 * @property $nombre
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Vuelo[] $vuelos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aerolinea extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vuelos()
    {
        return $this->hasMany('App\Models\Vuelo', 'aerolinea_id', 'id');
    }
    

}

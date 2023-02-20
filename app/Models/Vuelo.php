<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vuelo
 *
 * @property $id
 * @property $aerolinea_id
 * @property $salida
 * @property $destino_id
 * @property $avion
 * @property $embarque
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Aerolinea $aerolinea
 * @property Destino $destino
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vuelo extends Model
{
    
    static $rules = [
		'aerolinea_id' => 'required',
		'salida' => 'required',
		'destino_id' => 'required',
		'avion' => 'required',
		'embarque' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['aerolinea_id','salida','destino_id','avion','embarque','estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aerolinea()
    {
        return $this->hasOne('App\Models\Aerolinea', 'id', 'aerolinea_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destino()
    {
        return $this->hasOne('App\Models\Destino', 'id', 'destino_id');
    }
    

}

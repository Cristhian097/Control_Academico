<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $jornada
 * @property $id_hora
 * @property $created_at
 * @property $updated_at
 *
 * @property Hora $hora
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'jornada' => 'required',
		'id_hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jornada','id_hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hora()
    {
        return $this->hasOne('App\Models\Hora', 'id', 'id_hora');
    }
    

}

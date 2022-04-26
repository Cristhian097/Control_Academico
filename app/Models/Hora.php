<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hora
 *
 * @property $id
 * @property $dia
 * @property $hora_ini
 * @property $hora_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hora extends Model
{
    
    static $rules = [
		'dia' => 'required',
		'hora_ini' => 'required',
		'hora_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dia','hora_ini','hora_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'id_hora', 'id');
    }
    

}

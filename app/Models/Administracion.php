<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administracion
 *
 * @property $id
 * @property $facultad
 * @property $name
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administracion extends Model
{
    
    static $rules = [
		'facultad' => 'required',
		'name' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['facultad','name','correo'];



}

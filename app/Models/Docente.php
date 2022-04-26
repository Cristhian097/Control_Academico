<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $Directiva
 * @property $Nombre
 * @property $Cedula
 * @property $Email
 * @property $Telefono
 * @property $Titulo
 * @property $Cargo
 * @property $Fecha de Nacimiento
 * @property $Foto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'Directiva' => 'required',
		'Nombre' => 'required',
		'Cedula' => 'required',
		'Email' => 'required',
		'Telefono' => 'required',
		'Titulo' => 'required',
		'Cargo' => 'required',
		'Fecha_de_Nacimiento' => 'required',
		'Foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Directiva','Nombre','Cedula','Email','Telefono','Titulo','Cargo','Fecha_de_Nacimiento','Foto'];



}

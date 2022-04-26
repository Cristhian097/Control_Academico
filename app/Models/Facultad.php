<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facultad
 *
 * @property $Id_Facultad
 * @property $Directiva
 * @property $Lugar
 *
 * @property Actividade $actividade
 * @property Directiva $directiva
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facultad extends Model
{
    
    static $rules = [
		'Id_Facultad' => 'required',
		'Directiva' => 'required',
		'Lugar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Facultad','Directiva','Lugar'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividade()
    {
        return $this->hasOne('App\Models\Actividade', 'Directiva', 'Directiva');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function directiva()
    {
        return $this->hasOne('App\Models\Directiva', 'Directiva', 'directiva');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'Directiva', 'Directiva');
    }
    

}

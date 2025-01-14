<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Userdata
 *
 * @property $id
 * @property $celular
 * @property $direccion
 * @property $docid
 * @property $fnacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Userdata extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['celular', 'direccion', 'docid', 'fnacimiento'];


}

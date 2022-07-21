<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //protected $table = 'usuarios'; //no es necesario ya que el singular es usuario y el plural se le agrega la 's'
    use HasFactory;
    protected $guarded = [];

    public function roles(){
        return $this->belongsToMany(Rol::class, 'usuarios_roles', 'usuarios_id', 'roles_id');
    }
}

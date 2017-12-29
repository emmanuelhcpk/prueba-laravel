<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioAdministrador extends Authenticatable
{
    //atributos
    /*public $email;
    public $telefono;
    public $token;
    public $nombre;
    public $nombres;
    public $apellidos;
    public $fecha_nacimiento;
    public $genero;
    public $created_at; //fecha creacion
    public $updated_at; //fecha actualizacion*/

    protected $fillable = [
        'perfil_id','activo','primer_nombre','agente_id','segundo_nombre','primer_apellido','segundo_apellido', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}

<?php

namespace App\Models;

use App\Process\Bp13\Pqrs;
use Illuminate\Database\Eloquent\Model;

class PrmEstado extends Model
{
    public static function getVehiculos(){
        return  PrmEstado::whereIn('id',[1,2,3,4])->get();
    }
    public static function getPqrs(){
        return  PrmEstado::whereIn('id',[16,17,18,19,20,21])->get();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    //cfg
    public $table = 'actors';
    public $timestamp = 'true';
    public $guarded = [];
    public $id = 'id';

    public function getNombreCompleto(){
        return null;
    }
}

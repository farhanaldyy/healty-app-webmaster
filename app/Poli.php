<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    //table database poli
    protected $fillable = [
        'name', 'ruangan', 'image'
    ];
}

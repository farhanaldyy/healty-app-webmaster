<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
     //table database dokter
     protected $fillable = [
        'name', 'spesialis', 'id_poli', 'image'
    ];
}

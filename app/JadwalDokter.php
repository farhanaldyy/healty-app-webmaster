<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    //table database jadwal dokter
     protected $fillable = [
        'id_dokter', 'id_poli', 'hari', 'jam_mulai', 'jam_selesai'
    ];
}

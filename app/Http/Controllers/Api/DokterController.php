<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dokter;

class DokterController extends Controller
{
    //
    public function index(){
        $dokter = Dokter::all();
         return response()->json([
            'success' => 1,
            'message'=> 'Get Dokter Berhasil',
            'dokters' => $dokter
        ]);
    }
}

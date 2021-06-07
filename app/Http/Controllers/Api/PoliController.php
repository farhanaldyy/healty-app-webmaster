<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Poli;

class PoliController extends Controller
{
    //
    public function index(){
        $poli = Poli::all();
         return response()->json([
            'success' => 1,
            'message'=> 'Get Poli Berhasil',
            'polis' => $poli
        ]);
    }
}

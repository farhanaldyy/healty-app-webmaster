<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        // die();
        $user = User::where('email', $request->email)->first();
        // cek user kosong atau tidak
        if ($user) {

            // validasi password
            if (password_verify($request->password, $user->password)){
                return response()->json([
                    'success' => 1,
                    'message'=> 'selamat datang, '.$user->name,
                    'user' => $user
                ]);

            }

            return $this->error('password salah');

        }

        // response message validasi email
        return $this->error('email tidak terdaftar');

    }

    public function error($pesan) {

        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);

    }

}

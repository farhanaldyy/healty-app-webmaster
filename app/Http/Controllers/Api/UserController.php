<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

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

    // function register
    public function register(Request $request) {

        // nama, email, passwaord validasi
        $validasi = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        // cek validasi
        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        // input data kedalam database
        $user = User::create(array_merge($request->all(), [
            // enkrip password
            'password' => bcrypt($request->password)
        ]));

        // cek user
        if ($user) {
            return response()->json([
                'success' => 1,
                'message' => 'Selamat anda berhasil register',
                'user' => $user
            ]);
        }

        return $this->error('Registrasi Gagal!');

    }

    public function error($pesan) {

        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);

    }

}

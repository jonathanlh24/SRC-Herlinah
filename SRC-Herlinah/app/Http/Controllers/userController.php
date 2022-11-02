<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class userController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(Request $request)
    {
        $pattern = "/[a-zA-Z0-9]+@gmail.com/";
        if (!preg_match_all($pattern, $request->email)
        ){
            return redirect('/')->with('error', 'Format email salah');
        }
        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            return redirect('/')->with('error', 'Email atau password salah');
        }
        if ($user->password != $request->password) {
            return redirect('/')->with('error', 'Email atau password salah');
        }
        if ($user->role_id == 0) {
            return redirect('/dash_pemilikToko');
        } else {
            return redirect('/dash_pemilikToko');
        }
    }

    public function signup(Request $request)
    {
        $pattern = "/[a-zA-Z0-9]+@gmail.com/";
        if (!preg_match_all($pattern, $request->email)) {
            return redirect('/signup')->with('error', 'Format email salah');
        }
        if($request->password != $request->konpassword){
            return redirect('/signup')->with('error', 'Password dan Konfirmasi Password Tidak Sama');
        }
        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = 1;
        $user->save();
        return view('login');
    }
}

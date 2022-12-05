<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
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
        if (!preg_match_all($pattern, $request->email)) {
            return redirect('/')->with('error', 'Email atau password yang Anda masukkan salah!');
        }
        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            return redirect('/')->with('error', 'Email atau password yang Anda masukkan salah!');
        }
        if ($user->password != $request->password) {
            return redirect('/')->with('error', 'Email atau password yang Anda masukkan salah!');
        }
        if ($user->role_id == 0) {
            session(['user' => $user]);
            return redirect('/pemilikToko');
        } else {
            $penjualan = Penjualan::select('*')->get();
            session(['user' => $user]);
            return redirect('/staffToko')->with('penjualans', $penjualan);
            // return view('/pages.staff_toko.dash_staff')->with('penjualans', $penjualan);
        }
    }

    // -------------- PEMILIK TOKO --------------
    public function dashPemilikToko()
    {
        return view('pages.pemilik_toko.profile_pemilik');
    }

    public function profilePemilik(Request $request)
    {
        $pattern = "/[a-zA-Z0-9]+@gmail.com/";
        if (!preg_match_all($pattern, $request->email)) {
            return redirect('/profilePemilik')->with('wrongFormat', 'Format Email Salah (example@gmail.com)');
        }
        $user = User::where('email', $request->oldEmail)->update(['nama' => $request->nama, 'email' => $request->email]);
        $user = User::where('email', $request->email)->first();
        session(['user' => $user]);
        return redirect('/profilePemilik');
    }

    public function gantiPasswordPemilik(Request $request)
    {
        $user = User::where('email', $request->gantipassword)->first();
        if ($user->password != $request->passlama) {
            return redirect('/profilePemilik')->with('errorGantipassword', 'Password Lama yang Anda Masukkan Tidak Sesuai !');
        }
        if ($request->passbaru != $request->konfirmasipassbaru) {
            return redirect('/profilePemilik')->with('errorGantipassword', 'Password Baru dan Konfirmasi Password Baru yang Anda Masukkan Tidak Cocok !');
        }
        $user = User::where('email', $request->gantipassword)->update(['password' => $request->passbaru]);
        return redirect('/profilePemilik');
    }

    // -------------- STAFF TOKO --------------
    public function dashStaffToko()
    {
        return view('pages.staff_toko.profile_staff');
    }

    public function profileStaff(Request $request)
    {
        $pattern = "/[a-zA-Z0-9]+@gmail.com/";
        if (!preg_match_all($pattern, $request->email)) {
            return redirect('/profileStaff')->with('wrongFormat', 'Format Email Salah (example@gmail.com)');
        }

        $user = User::where('email', $request->oldEmail)->update(['nama' => $request->nama, 'email' => $request->email]);
        $user = User::where('email', $request->email)->first();
        session(['user' => $user]);
        return redirect('/profileStaff');
    }

    public function gantiPasswordStaff(Request $request)
    {
        $user = User::where('email', $request->gantipassword)->first();
        if ($user->password != $request->passlama) {
            return redirect('/profileStaff')->with('errorGantipassword', 'Password Lama yang Anda masukkan Tidak Sesuai !');
        }
        if ($request->passbaru != $request->konfirmasipassbaru) {
            return redirect('/profileStaff')->with('errorGantipassword', 'Password Baru dan Konfirmasi Password Baru yang Anda masukkan salah!');
        }
        $user = User::where('email', $request->gantipassword)->update(['password' => $request->passbaru]);
        return redirect('/profileStaff');
    }
}

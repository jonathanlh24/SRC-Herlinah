<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Staff;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class pemilikController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dataBarang()
    {
        $barang = Barang::all();
        return view('pages.pemilik_toko.data_barang')->with('barangs', $barang);
    }

    public function dataStaff()
    {
        $staff = Staff::where('role_id', 1)->get();
        return view('pages.pemilik_toko.data_staff')->with('staffs', $staff);
    }

    public function home()
    {
        $staff = Staff::where('role_id', 1)->count();
        $barang = Barang::all()->count();
        return view('pages.pemilik_toko.dash_pemilik')->with([
            'staffs' => $staff, 'barangs' => $barang
        ]);


    }
}

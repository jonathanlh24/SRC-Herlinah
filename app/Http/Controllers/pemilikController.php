<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Staff;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class pemilikController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        $staff = Staff::where('role_id', 1)->count();
        $barang = Barang::all()->count();
        return view('pages.pemilik_toko.dash_pemilik')->with([
            'staffs' => $staff, 'barangs' => $barang
        ]);
    }

    // -------------- STAFF --------------
    public function dataStaff()
    {
        $staff = Staff::where('role_id', 1)->get();
        return view('pages.pemilik_toko.data_staff')->with('staffs', $staff);
    }

    public function createStaff()
    {
        return view('/pages.pemilik_toko.tambah_staff');
    }

    public function tambahStaff(Request $request)
    {
        $pattern = "/[a-zA-Z0-9]+@gmail.com/";
        if (!preg_match_all($pattern, $request->emailStaff)) {
            return redirect('/tambahStaff')->with('wrongFormat', 'Format Email Salah (example@gmail.com)');
        }
        $staffCheckID = Staff::where('id_user', $request->idStaff)->first();
        $staffCheckEmail = Staff::where('email', $request->emailStaff)->first();
        if ($staffCheckID != null) {
            return redirect('/tambahStaff')->with('failedAddStaff', 'ID Staff Toko Telah Digunakan');
        } else if ($staffCheckEmail != null) {
            return redirect('/tambahStaff')->with('failedAddStaff', 'Email Staff Toko Telah Digunakan');
        } else {
            $staff = new Staff();
            $staff->id_user = $request->idStaff;
            $staff->nama = $request->namaStaff;
            $staff->email = $request->emailStaff;
            $staff->password = '123456';
            $staff->role_id = 1;
            $staff->save();
            return redirect('/dataStaff')->with('successAddStaff', 'Staff Toko Berhasil Ditambahkan');
        }
    }

    public function editStaff(Staff $staff)
    {
        return view('/pages.pemilik_toko.edit_staff')->with(['modal' => true, 'staff' => $staff]);
    }

    public function saveEditStaff(Request $request)
    {
        Staff::where('id_user', $request->idStaff)->update(['nama' => $request->namaStaff, 'email' => $request->emailStaff]);
        return redirect('/dataStaff')->with('successEditStaff', "Staff Toko Berhasil Diperbaharui");
    }

    public function deleteStaff($id_staff)
    {
        Staff::where('id_user', $id_staff)->first()->delete();
        return redirect('/dataStaff')->with('successDeleteStaff', 'Staff Toko Berhasil Dihapus');
    }

    // -------------- BARANG --------------
    public function dataBarang()
    {
        $barang = Barang::all();
        return view('pages.pemilik_toko.data_barang')->with('barangs', $barang);
    }

    public function createBarang()
    {
        return view('/pages.pemilik_toko.tambah_barang');
    }

    public function tambahBarang(Request $request)
    {
        $barangCheckID = Barang::where('id_barang', $request->idBarang)->first();
        $barangCheckNama = Barang::where('nama_barang', $request->namaBarang)->first();
        if ($barangCheckID != null) {
            return redirect('/tambahBarang')->with('failedAddBarang', 'ID Barang Telah Digunakan');
        }
        if ($barangCheckNama != null) {
            return redirect('/tambahBarang')->with('failedAddBarang', 'Nama Barang Telah Digunakan');
        } else {
            $barang = new Barang();
            $barang->id_barang = $request->idBarang;
            $barang->nama_barang = $request->namaBarang;
            $barang->harga_jual = $request->hargaJual;
            $barang->harga_beli = $request->hargaBeli;
            $barang->jumlah_stok_barang = $request->stokBarang;
            if ($request->hargaBeli > $request->hargaJual) {
                return redirect('/tambahBarang')->with('failedAddBarang', 'Harga Jual Harus Lebih Tinggi Daripada Harga Beli');
            } else {
                $barang->save();
                return redirect('/dataBarang')->with('successAddBarang', 'Barang Berhasil Ditambahkan');
            }
        }
    }

    public function editBarang(Barang $barang)
    {
        return view('/pages.pemilik_toko.edit_barang')->with(['modal' => true, 'barang' => $barang]);
    }

    public function saveEditBarang(Request $request)
    {
        // $barangCheckNama = Barang::where('nama_barang', $request->namaBarang)->first();
        // if ($barangCheckNama != null) {
        //     return redirect('/editBarang')->with('failedAddBarang', 'Nama Barang Telah Digunakan');
        // } else {
        Barang::where('id_barang', $request->idBarang)->update(['nama_barang' => $request->namaBarang, 'jumlah_stok_barang' => $request->stokBarang, 'harga_beli' => $request->hargaBeli, 'harga_jual' => $request->hargaJual]);
        //     if ($request->hargaBeli > $request->hargaJual) {
        //         return redirect('/editBarang')->with('failedAddBarang', 'Harga Jual Harus Lebih Tinggi Daripada Harga Beli');
        //     } else {
        return redirect('/dataBarang')->with('successEditBarang', "Barang Berhasil Diperbaharui");
        //     }
        // }
    }

    public function deleteBarang($id_barang)
    {
        Barang::where('id_barang', $id_barang)->delete();
        return redirect('/dataBarang')->with('successDeleteBarang', 'Barang Berhasil Dihapus');
    }


    public function createStokBarang()
    {
        return view('/pages.pemilik_toko.tambah_stok_barang');
    }

    public function tambahStokBarang(Request $request)
    {

        $barang = new Barang();
        $barang->id_barang = $request->idBarang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_beli = $request->hargaBeli;
        $barang->jumlah_stok_barang = $request->stokBarang;
        $barang->save();
        return redirect('/dataBarang')->with('status', 'Stok Barang Berhasil Ditambahkan');
    }

    //-------------- TRANSAKSI --------------
    // public function editTransaksi(Barang $barang)
    // {
    //     dump($barang);
    //     return view('pages.pemilik_toko.edit_transaksi', [
    //         'barang' => $barang
    //     ]);
    // }
}

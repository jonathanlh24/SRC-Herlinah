<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class staffController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createTransaksi()
    {
        return view('/pages.staff_toko.transaksi');
    }

    public function transaksi(Request $request)
    {
        $penjualan = new Penjualan();
        $penjualan->tanggal_penjualan = Carbon::now();
        $penjualan->total_harga = 0;
        $penjualan->save();
        $penjualan2 = Penjualan::all()->last()->id_penjualan;
        $transaksi = Transaksi::where('penjualan_id_penjualan', $penjualan2);
        $barang = DB::table('barang')
            ->join('transaksi', 'barang.id_barang', '=', 'transaksi.barang_id_barang')
            ->join('penjualan', 'penjualan.id_penjualan', '=', 'transaksi.penjualan_id_penjualan')
            ->select('barang.id_barang', 'barang.nama_barang', 'transaksi.jumlah_barang', 'transaksi.harga_jual')
            ->where('transaksi.penjualan_id_penjualan', '=', $penjualan2)
            ->get();
        session(['penjualan' => $penjualan2]);
        return view('/pages.staff_toko.transaksi')->with('barangs', $barang);
    }

    public function createBarangTransaksi()
    {
        return view('/pages.staff_toko.tambah_barang_transaksi');
    }

    public function tambahBarangTransaksi(Request $request)
    {
        $transaksi = new Transaksi();
        $barang = Barang::where('nama_barang', $request->namaBarang)->first();
        $transaksi->barang_id_barang = $barang->id_barang;
        $transaksi->penjualan_id_penjualan = $request->idPenjualan;
        $transaksi->jumlah_barang = $request->stokBarang;
        $transaksi->harga_jual = $request->hargaJual * $request->stokBarang;
        $transaksi->save();

        $penjualan = $request->idPenjualan;
        $barang = DB::table('barang')
            ->join('transaksi', 'barang.id_barang', '=', 'transaksi.barang_id_barang')
            ->join('penjualan', 'penjualan.id_penjualan', '=', 'transaksi.penjualan_id_penjualan')
            ->select('barang.id_barang', 'barang.nama_barang', 'transaksi.jumlah_barang', 'transaksi.harga_jual')
            ->where('transaksi.penjualan_id_penjualan', '=', $penjualan)
            ->get();
        return view('/pages.staff_toko.transaksi')->with('barangs', $barang);
    }

    public function simpanTransaksi(Request $request)
    {
        $penjualan2 = Penjualan::all()->last()->id_penjualan;
        $total = DB::table('transaksi')
            ->join('penjualan', 'penjualan.id_penjualan', '=', 'transaksi.penjualan_id_penjualan')
            ->where('transaksi.penjualan_id_penjualan', '=', $penjualan2)
            ->sum('transaksi.harga_jual');
        Penjualan::where('id_penjualan', $penjualan2)->update(['tanggal_penjualan' => Carbon::now(), 'total_harga' => $total]);
        $penjualan = Penjualan::all();
        return redirect('/staffToko')->with('penjualans', $penjualan);
    }
}

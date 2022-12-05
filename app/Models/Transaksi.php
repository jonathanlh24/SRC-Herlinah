<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transaksi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $keyType = 'int';
    protected $fillable = ['id_transaksi', 'jumlah_barang', 'harga_jual', 'barang_id_barang', 'penjualan_id_penjualan'];
}

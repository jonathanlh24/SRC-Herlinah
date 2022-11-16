<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $keyType = 'int';
    protected $fillable = ['id_barang', 'nama_barang', 'harga_jual','harga_beli', 'jumlah_stok_barang'];
}
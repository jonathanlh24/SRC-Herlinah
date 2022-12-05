<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'history_stok';
    protected $primaryKey = 'id_history';
    protected $keyType = 'int';
    protected $fillable = ['id_history', 'jumlah_barang', 'harga_beli', 'barang_id_barang', 'stok_id_stok'];
}

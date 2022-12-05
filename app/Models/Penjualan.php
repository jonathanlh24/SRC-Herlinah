<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $keyType = 'int';
    protected $fillable = ['id_penjualan', 'tanggal_penjualan', 'total_harga'];
}
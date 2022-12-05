<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Stok extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'stok';
    protected $primaryKey = 'id_stok';
    protected $keyType = 'int';
    protected $fillable = ['id_stok', 'tanggal_pembelian', 'pengirim'];
}

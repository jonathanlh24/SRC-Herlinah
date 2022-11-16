<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Staff extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $keyType = 'int';
    protected $fillable = ['id_user', 'nama', 'email','password', 'role_id'];
}
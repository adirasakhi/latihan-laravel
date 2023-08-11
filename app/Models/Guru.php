<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    //tambahkan kode berikut
    protected $fillable = [
        'nama', 'pendidikan','no_telepon','alamat'
    ];
}
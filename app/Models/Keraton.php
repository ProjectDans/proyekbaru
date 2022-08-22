<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keraton extends Model
{
    use HasFactory;
    protected $table = "keraton";
    protected $fillable = [
        'id', 'pedagang', 'jenis_kelamin', 'agama', 'telepon', 'nik', 'status_nikah', 'alamat', 'nama_usaha', 'wilayah'
    ];
}

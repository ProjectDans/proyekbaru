<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunalun extends Model
{
    use HasFactory;
    protected $table = "alunalun";
    protected $fillable = [
        'id', 'pedagang', 'jenis_kelamin', 'agama', 'telepon', 'nik', 'status_nikah', 'alamat', 'nama_usaha', 'wilayah'
    ];
}

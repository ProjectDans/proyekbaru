<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    use HasFactory;
    protected $table = "pedagang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pedagang', 'jenis_kelamin', 'agama', 'telepon', 'nik', 'status_nikah', 'alamat', 'usaha', 'wilayah_id'
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }

    public function iuran()
    {
        return $this->hasMany(Iuran::class);
    }
}

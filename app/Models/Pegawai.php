<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pegawai', 'jabatan_id', 'alamat', 'tanggal'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}

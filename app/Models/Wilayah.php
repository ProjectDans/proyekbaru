<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = "wilayah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'wilayah', 'alamat'
    ];

    public function Pedagang()
    {
        return $this->hasMany(Pedagang::class);
    }

    public function iuran()
    {
        return $this->hasMany(Iuran::class);
    }
}

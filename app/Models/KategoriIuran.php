<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriIuran extends Model
{
    protected $table ="kategoriiuran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategoriiuran', 'jumlah_iuran'
    ];

    public function iuran()
    {
        return $this->hasMany(Iuran::class);
    }
}

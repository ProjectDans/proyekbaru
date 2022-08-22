<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iuran extends Model
{
    use SoftDeletes;
    protected $table = "iuran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pedagang', 'usaha', 'kategoriiuran_id', 'jumlah', 'tanggal'
    ];

    public function kategoriiuran()
    {
        return $this->belongsTo(KategoriIuran::class);
    }
}

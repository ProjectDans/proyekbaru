<?php

namespace Database\Seeders;

use App\Models\Pengumuman;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengumuman::truncate();
        Pengumuman::create([
            'id' => 1,
            'isi' => 'Pengumuman',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}

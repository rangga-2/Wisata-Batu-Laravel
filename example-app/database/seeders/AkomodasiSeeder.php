<?php

use Illuminate\Database\Seeder;
use App\Models\Akomodasi;

class AkomodasiSeeder extends Seeder
{
    public function run()
    {
        Akomodasi::create([
            'nama_hotel' => 'Hotel Mawar',
            'harga' => 500000,
            'jumlah_kamar' => 50
        ]);

        Akomodasi::create([
            'nama_hotel' => 'Hotel Melati',
            'harga' => 300000,
            'jumlah_kamar' => 20
        ]);
    }
}


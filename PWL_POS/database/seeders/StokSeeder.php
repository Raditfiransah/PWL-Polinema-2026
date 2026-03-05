<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        // 15 stok → 1 stok per barang, supplier bergilir (1,2,3,1,2,3,...)
        $data = [
            ['stok_id' => 1,  'supplier_id' => 1, 'barang_id' => 1,  'user_id' => 1, 'stok_tanggal' => '2026-01-05 08:00:00', 'stok_jumlah' => 100],
            ['stok_id' => 2,  'supplier_id' => 2, 'barang_id' => 2,  'user_id' => 1, 'stok_tanggal' => '2026-01-05 08:30:00', 'stok_jumlah' => 200],
            ['stok_id' => 3,  'supplier_id' => 3, 'barang_id' => 3,  'user_id' => 2, 'stok_tanggal' => '2026-01-06 09:00:00', 'stok_jumlah' => 150],
            ['stok_id' => 4,  'supplier_id' => 1, 'barang_id' => 4,  'user_id' => 2, 'stok_tanggal' => '2026-01-06 09:30:00', 'stok_jumlah' => 500],
            ['stok_id' => 5,  'supplier_id' => 2, 'barang_id' => 5,  'user_id' => 3, 'stok_tanggal' => '2026-01-07 10:00:00', 'stok_jumlah' => 300],
            ['stok_id' => 6,  'supplier_id' => 3, 'barang_id' => 6,  'user_id' => 3, 'stok_tanggal' => '2026-01-07 10:30:00', 'stok_jumlah' => 250],
            ['stok_id' => 7,  'supplier_id' => 1, 'barang_id' => 7,  'user_id' => 1, 'stok_tanggal' => '2026-01-08 08:00:00', 'stok_jumlah' => 120],
            ['stok_id' => 8,  'supplier_id' => 2, 'barang_id' => 8,  'user_id' => 2, 'stok_tanggal' => '2026-01-08 09:00:00', 'stok_jumlah' => 80],
            ['stok_id' => 9,  'supplier_id' => 3, 'barang_id' => 9,  'user_id' => 3, 'stok_tanggal' => '2026-01-09 10:00:00', 'stok_jumlah' => 90],
            ['stok_id' => 10, 'supplier_id' => 1, 'barang_id' => 10, 'user_id' => 1, 'stok_tanggal' => '2026-01-09 11:00:00', 'stok_jumlah' => 400],
            ['stok_id' => 11, 'supplier_id' => 2, 'barang_id' => 11, 'user_id' => 2, 'stok_tanggal' => '2026-01-10 08:00:00', 'stok_jumlah' => 180],
            ['stok_id' => 12, 'supplier_id' => 3, 'barang_id' => 12, 'user_id' => 3, 'stok_tanggal' => '2026-01-10 09:00:00', 'stok_jumlah' => 220],
            ['stok_id' => 13, 'supplier_id' => 1, 'barang_id' => 13, 'user_id' => 1, 'stok_tanggal' => '2026-01-11 08:00:00', 'stok_jumlah' => 60],
            ['stok_id' => 14, 'supplier_id' => 2, 'barang_id' => 14, 'user_id' => 2, 'stok_tanggal' => '2026-01-11 09:00:00', 'stok_jumlah' => 75],
            ['stok_id' => 15, 'supplier_id' => 3, 'barang_id' => 15, 'user_id' => 3, 'stok_tanggal' => '2026-01-11 10:00:00', 'stok_jumlah' => 50],
        ];
        DB::table('t_stok')->insert($data);
    }
}

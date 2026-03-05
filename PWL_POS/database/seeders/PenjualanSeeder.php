<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // 10 transaksi penjualan
        $data = [
            ['penjualan_id' => 1,  'user_id' => 3, 'pembeli' => 'Andi Saputra',   'penjualan_kode' => 'TRX-2026-001', 'penjualan_tanggal' => '2026-02-01 08:30:00'],
            ['penjualan_id' => 2,  'user_id' => 3, 'pembeli' => 'Budi Hartono',    'penjualan_kode' => 'TRX-2026-002', 'penjualan_tanggal' => '2026-02-03 09:00:00'],
            ['penjualan_id' => 3,  'user_id' => 3, 'pembeli' => 'Citra Lestari',   'penjualan_kode' => 'TRX-2026-003', 'penjualan_tanggal' => '2026-02-05 10:15:00'],
            ['penjualan_id' => 4,  'user_id' => 2, 'pembeli' => 'Dian Permata',    'penjualan_kode' => 'TRX-2026-004', 'penjualan_tanggal' => '2026-02-07 11:00:00'],
            ['penjualan_id' => 5,  'user_id' => 2, 'pembeli' => 'Eko Prasetyo',    'penjualan_kode' => 'TRX-2026-005', 'penjualan_tanggal' => '2026-02-10 13:30:00'],
            ['penjualan_id' => 6,  'user_id' => 3, 'pembeli' => 'Fitri Handayani', 'penjualan_kode' => 'TRX-2026-006', 'penjualan_tanggal' => '2026-02-12 14:00:00'],
            ['penjualan_id' => 7,  'user_id' => 3, 'pembeli' => 'Gilang Ramadhan', 'penjualan_kode' => 'TRX-2026-007', 'penjualan_tanggal' => '2026-02-15 09:45:00'],
            ['penjualan_id' => 8,  'user_id' => 2, 'pembeli' => 'Hana Sari',       'penjualan_kode' => 'TRX-2026-008', 'penjualan_tanggal' => '2026-02-18 10:30:00'],
            ['penjualan_id' => 9,  'user_id' => 3, 'pembeli' => 'Irwan Susanto',   'penjualan_kode' => 'TRX-2026-009', 'penjualan_tanggal' => '2026-02-20 15:00:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Joko Widodo',     'penjualan_kode' => 'TRX-2026-010', 'penjualan_tanggal' => '2026-02-22 16:00:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

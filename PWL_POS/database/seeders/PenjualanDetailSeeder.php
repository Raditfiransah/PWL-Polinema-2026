<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        // 30 detail → 3 barang per penjualan, 10 penjualan
        $data = [
            // Transaksi 1
            ['penjualan_id' => 1,  'barang_id' => 1,  'harga' => 72000, 'jumlah' => 2],
            ['penjualan_id' => 1,  'barang_id' => 4,  'harga' => 4000,  'jumlah' => 5],
            ['penjualan_id' => 1,  'barang_id' => 7,  'harga' => 12000, 'jumlah' => 3],
            // Transaksi 2
            ['penjualan_id' => 2,  'barang_id' => 2,  'harga' => 18000, 'jumlah' => 3],
            ['penjualan_id' => 2,  'barang_id' => 5,  'harga' => 6000,  'jumlah' => 4],
            ['penjualan_id' => 2,  'barang_id' => 13, 'harga' => 20000, 'jumlah' => 2],
            // Transaksi 3
            ['penjualan_id' => 3,  'barang_id' => 3,  'harga' => 15000, 'jumlah' => 2],
            ['penjualan_id' => 3,  'barang_id' => 8,  'harga' => 30000, 'jumlah' => 1],
            ['penjualan_id' => 3,  'barang_id' => 14, 'harga' => 12000, 'jumlah' => 3],
            // Transaksi 4
            ['penjualan_id' => 4,  'barang_id' => 6,  'harga' => 7000,  'jumlah' => 6],
            ['penjualan_id' => 4,  'barang_id' => 9,  'harga' => 15000, 'jumlah' => 2],
            ['penjualan_id' => 4,  'barang_id' => 15, 'harga' => 25000, 'jumlah' => 1],
            // Transaksi 5
            ['penjualan_id' => 5,  'barang_id' => 10, 'harga' => 5000,  'jumlah' => 4],
            ['penjualan_id' => 5,  'barang_id' => 11, 'harga' => 13000, 'jumlah' => 2],
            ['penjualan_id' => 5,  'barang_id' => 12, 'harga' => 10000, 'jumlah' => 3],
            // Transaksi 6
            ['penjualan_id' => 6,  'barang_id' => 1,  'harga' => 72000, 'jumlah' => 1],
            ['penjualan_id' => 6,  'barang_id' => 5,  'harga' => 6000,  'jumlah' => 3],
            ['penjualan_id' => 6,  'barang_id' => 10, 'harga' => 5000,  'jumlah' => 5],
            // Transaksi 7
            ['penjualan_id' => 7,  'barang_id' => 2,  'harga' => 18000, 'jumlah' => 2],
            ['penjualan_id' => 7,  'barang_id' => 6,  'harga' => 7000,  'jumlah' => 4],
            ['penjualan_id' => 7,  'barang_id' => 13, 'harga' => 20000, 'jumlah' => 1],
            // Transaksi 8
            ['penjualan_id' => 8,  'barang_id' => 3,  'harga' => 15000, 'jumlah' => 3],
            ['penjualan_id' => 8,  'barang_id' => 9,  'harga' => 15000, 'jumlah' => 2],
            ['penjualan_id' => 8,  'barang_id' => 14, 'harga' => 12000, 'jumlah' => 4],
            // Transaksi 9
            ['penjualan_id' => 9,  'barang_id' => 4,  'harga' => 4000,  'jumlah' => 10],
            ['penjualan_id' => 9,  'barang_id' => 8,  'harga' => 30000, 'jumlah' => 2],
            ['penjualan_id' => 9,  'barang_id' => 15, 'harga' => 25000, 'jumlah' => 1],
            // Transaksi 10
            ['penjualan_id' => 10, 'barang_id' => 7,  'harga' => 12000, 'jumlah' => 3],
            ['penjualan_id' => 10, 'barang_id' => 11, 'harga' => 13000, 'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 12, 'harga' => 10000, 'jumlah' => 4],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}

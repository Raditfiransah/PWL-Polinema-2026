<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        // 15 barang, 5 per kategori (kategori_id 1-5, masing-masing 3 barang)
        // distribusikan merata: 3 barang per kategori = 15 total
        $data = [
            // Kategori 1 - Makanan Pokok
            ['barang_id' => 1,  'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Beras Premium 5kg',     'harga_beli' => 60000,  'harga_jual' => 72000],
            ['barang_id' => 2,  'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Minyak Goreng 1L',      'harga_beli' => 14000,  'harga_jual' => 18000],
            ['barang_id' => 3,  'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Gula Pasir 1kg',        'harga_beli' => 12000,  'harga_jual' => 15000],
            // Kategori 2 - Minuman
            ['barang_id' => 4,  'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Air Mineral 600ml',     'harga_beli' => 2000,   'harga_jual' => 4000],
            ['barang_id' => 5,  'kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Teh Botol 350ml',       'harga_beli' => 3500,   'harga_jual' => 6000],
            ['barang_id' => 6,  'kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Jus Jeruk 250ml',       'harga_beli' => 4000,   'harga_jual' => 7000],
            // Kategori 3 - Snack & Camilan
            ['barang_id' => 7,  'kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Keripik Singkong 200g', 'harga_beli' => 8000,   'harga_jual' => 12000],
            ['barang_id' => 8,  'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Biskuit Kaleng 350g',   'harga_beli' => 22000,  'harga_jual' => 30000],
            ['barang_id' => 9,  'kategori_id' => 3, 'barang_kode' => 'BRG009', 'barang_nama' => 'Wafer Coklat 140g',     'harga_beli' => 10000,  'harga_jual' => 15000],
            // Kategori 4 - Bumbu & Rempah
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Garam Halus 500g',      'harga_beli' => 3000,   'harga_jual' => 5000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Kecap Manis 275ml',     'harga_beli' => 9000,   'harga_jual' => 13000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Saus Sambal 135ml',     'harga_beli' => 7000,   'harga_jual' => 10000],
            // Kategori 5 - Produk Susu
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Susu UHT Full Cream 1L','harga_beli' => 15000,  'harga_jual' => 20000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Yogurt Stroberi 200ml', 'harga_beli' => 8000,   'harga_jual' => 12000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Keju Slice 10pcs',      'harga_beli' => 18000,  'harga_jual' => 25000],
        ];
        DB::table('m_barang')->insert($data);
    }
}

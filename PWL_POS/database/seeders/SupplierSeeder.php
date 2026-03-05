<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP001', 'supplier_nama' => 'PT. Sumber Makmur',   'supplier_alamat' => 'Jl. Raya Malang No. 10, Malang'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP002', 'supplier_nama' => 'CV. Berkah Jaya',      'supplier_alamat' => 'Jl. Merdeka No. 5, Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP003', 'supplier_nama' => 'UD. Maju Bersama',     'supplier_alamat' => 'Jl. Industri No. 88, Sidoarjo'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}

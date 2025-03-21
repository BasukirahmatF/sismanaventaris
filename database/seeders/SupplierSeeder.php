<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder {
    public function run() {
        $suppliers = [
            [
                'supplier_code' => 'BAP001',
                'supplier_name' => 'PT. Jaswita',
                'supplier_address' => 'Jl. Pahlawan',
                'supplier_phone' => '082656526266',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder {
    public function run() {
        $items = [
            [
                'item_code' => 'LPK001',
                'item_name' => 'Laptop',
                'specification' => 'Intel i3',
                'item_location' => 'Warehouse 1',
                'category' => 'Elektronik',
                'condition' => 'New',
                'item_type' => 'Asset',
                'funding_source' => 'Company',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}

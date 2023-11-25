<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder {
    public function run(): void {
        DB::table('products')->insert([
            'name'     => 'Demo Product',
            'quantity' => 10,
            'price'    => 100,
        ]);
    }
}

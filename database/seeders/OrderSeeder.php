<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Seed the orders table with test data
        Order::create([
            'name' => 'John Doe',
            'address' => '123 Main Street',
            'phone' => '555-1234',
            'created_at' => now(),
        ]);

        Order::create([
            'name' => 'Jane Smith',
            'address' => '456 Elm Street',
            'phone' => '555-5678',
            'created_at' => now(),
        ]);
    }
}

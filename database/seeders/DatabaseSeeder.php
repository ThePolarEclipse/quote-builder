<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItem;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 products
        Product::factory()->count(10)->create();

        // Create 5 quotes with items
        Quote::factory()
            ->count(5)
            ->has(
                QuoteItem::factory()->count(3), 
                'items'
            )
            ->create();
    }
}

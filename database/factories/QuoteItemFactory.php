<?php

namespace Database\Factories;

use App\Models\QuoteItem;
use App\Models\Product;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteItemFactory extends Factory
{
    protected $model = QuoteItem::class;

    public function definition()
    {
        return [
            'quote_id' => Quote::factory(),
            'product_id' => Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}

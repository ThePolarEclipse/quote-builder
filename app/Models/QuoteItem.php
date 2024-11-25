<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
    use HasFactory;

    protected $fillable = ['quote_id', 'product_id', 'quantity'];

    // Define the inverse relationship to Quote
    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    // Define the relationship to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

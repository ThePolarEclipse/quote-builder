<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['customer_email'];

    // Define the relationship to QuoteItem
    public function items()
    {
        return $this->hasMany(QuoteItem::class);
    }
}

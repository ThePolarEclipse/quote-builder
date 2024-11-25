<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class QuoteController extends Controller
{
    public function index()
    {
        return Quote::with('items.product')->get();
    }

    public function store(Request $request)
    {
        $quote = Quote::create(['customer_email' => $request->customer_email]);

        foreach ($request->items as $item) {
            $quote->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
            ]);
        }

        return $quote->load('items.product');
    }
    public function sendQuote($id)
    {
        $quote = Quote::find($id);
        Mail::to($quote->customer_email)->send(new QuoteMail($quote));
    }

}

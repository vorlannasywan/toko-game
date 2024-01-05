<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        Purchase::create([
            'game_id' => $request->game_id,
            'full_name' => $request->full_name,
            'payment_method' => $request->payment_method,
            'email' => $request->email,
        ]);
        
        return redirect()->back()->with('success', 'Purchase successful!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'product'])->get();
        $users = User::all(); 
         $products = Product::all();
    
        return view('order', compact('orders', 'users', 'products'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'status' => 'required|string',
        ]);

        order::create([
            'user_id' => auth()->id(), 
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);

        return redirect()->route('order')->with('success', 'Order created successfully!');
    }
}

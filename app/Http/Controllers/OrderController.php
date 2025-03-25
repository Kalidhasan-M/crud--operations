<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use App\Models\Product;
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
          'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        Order::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);

        return redirect()->route('order')->with('success', 'Order created successfully!');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all(); 
        $products = Product::all();
        
        return view('order_edit', compact('order', 'users', 'products'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

  $order->update([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);

        return redirect()->route('order')->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order')->with('success', 'Order deleted successfully!');
    }
}

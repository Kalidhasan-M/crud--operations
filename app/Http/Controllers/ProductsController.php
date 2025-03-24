<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request){
        product::create([
            'name'=>$request['name'],
            'price'=>$request['price'],
            'description'=>$request['description'],
            'stock'=>$request['stock'],
        ]);
        return redirect()->route('Products.index');
    }

    public function index(){
        $products=product::all();
        
        return view('products',compact('products'));
         
       }
       public function edit($id)
       {
           $product = product::findOrFail($id);
           return view('productedit', compact('product'));
       }
       
       public function update(Request $request, $id)
       {
           $product = product::findOrFail($id);
           $product->name = $request->name;
           $product->price = $request->price;
           $product->description = $request->description;
           $product->stock = $request->stock;
           $product->save();
       
           return redirect()->route('Products.index');
       }
       public function destroy($id)
       {
           $product = product::findOrFail($id);
           $product->delete();
           
           return redirect()->route('product');
       }


}

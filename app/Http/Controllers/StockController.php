<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('stock', [
            'products' => $products,
        ]);
    }

    public function update(Request $request){

        $product = Product::find($request->input('product_id'));

        switch ($request->input('operation')) {
            case '1':
                $product->stock =+ $request->input('stock');
                break;

            case '1':
                $product->stock =- $request->input('stock');
                break;

            case '1':
                $product->stock = $request->input('stock');
                break;
        }

        $product->save();

    }
}

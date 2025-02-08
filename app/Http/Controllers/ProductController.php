<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function getCreateProductPage()
    {
        return view('CreateItem');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "ProductName" => "required|string|max:255",
            "ProductPrice" => "required|numeric|min:1",
            "ProductionDate" => "required|date",
            "ProductDescription" => "nullable|string|max:1000", 
            "ProductImage" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048" 
        ], [
            "ProductName.required" => "The product name is required.",
            "ProductPrice.required" => "The product price is required.",
            "ProductPrice.numeric" => "The product price must be a number.",
            "ProductImage.image" => "The product image must be a valid image file.",
        ]);

        if ($request->hasFile('ProductImage')) {
            $imagePath = $request->file('ProductImage')->store('images', 'public');
        } else {
            $imagePath = null; 
        }

        Product::create([
            'ProductName' => $validatedData['ProductName'],
            'ProductPrice' => $validatedData['ProductPrice'],
            'ProductionDate' => $validatedData['ProductionDate'],
            'ProductDescription' => $validatedData['ProductDescription'] ?? null, 
            'ProductImage' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Product successfully created!');
    }


}

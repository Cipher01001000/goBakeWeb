<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all products in index
    public function index()
    {
        return view('user/index', [
            'products' => Product::latest()->filter(
                request(['search'])
            )->paginate(12)
        ]);
    }

    //show single product 
    public function show(Product $product)
    {
        return view('user/product', [
            'product' => $product
        ]);
    }

    //show create form
    public function create()
    {
        return view('seller/addProduct');
    }

    //store product data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'product_image' => 'required',
            'category' => 'required',
            'stock' => 'required'
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }

        Product::create($formFields);

        return redirect('/seller')->with('success', 'Product added successfully!');
    }

    //Show edit form
    public function edit(Product $product)
    {
        return view('seller/editProduct', ['product' => $product]);
    }

    //Update product
    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'stock' => 'required'
            // 'product_image' => 'required',
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }

        $product->update($formFields);

        return redirect('/seller')->with('success', 'Product updated successfully!');
    }

    //Delete product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/seller')->with('success', 'Product Deleted Successfully!');
    }
}

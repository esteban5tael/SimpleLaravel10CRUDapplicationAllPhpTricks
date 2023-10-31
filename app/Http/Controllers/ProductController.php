<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index():View
    {
        $products=Product::latest()->paginate(9);
        return view('products.index',compact('products'));
    }

    public function create():View
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index')
        ->withSuccess('New product is added successfully.');
    }

    public function show(Product $product):View
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product):View
    {
        return view('products.edit',compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->back()
        ->withSuccess('Product is updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                ->withSuccess('Product is deleted successfully.');
    }
}

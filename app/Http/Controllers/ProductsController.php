<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class ProductsController extends Controller
{
    public function index(): Response
    {
        $products = Product::query()->simplePaginate(10);
        return Inertia::render('Product/Index', compact('products'));
    }

    public function show(Product $product): Response
    {
        return Inertia::render('Product/Show', compact('product'));
    }

    public function create(): Response
    {
        $categories = Category::all();
        return Inertia::render('Product/Create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'category_id' => ['required'],
        ]);

        Product::query()->create($validated);
        return redirect()->back();
    }

    public function edit(Product $product): Response
    {
        return Inertia::render('Product/Edit', compact('product'));
    }

    public function update(Product $product, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
        ]);

        $product->fill($validated);
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

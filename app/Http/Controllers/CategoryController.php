<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    public function index(): Response
    {
        $category = Category::query()->simplePaginate(10);
        return Inertia::render('Category/Index', compact('category'));
    }

    public function show(Category $category): Response
    {
        return Inertia::render('Category/Show', compact('category'));
    }

    public function create(): Response
    {
        return Inertia::render('Category/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
        ]);

        Category::query()->create($validated);
        return redirect()->back();
    }

    public function edit(Category $category): Response
    {
        return Inertia::render('Category/Edit', compact('category'));
    }

    public function update(Category $category, Request $request): RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}

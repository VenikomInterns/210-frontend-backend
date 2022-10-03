<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

//excellent
class CategoryController extends Controller
{
    public function index(): Response
    {
        $category = Category::query()->simplePaginate(10);
        return Inertia::render('Category/Index', compact('category'));
    }//excellent

    public function show(Category $category): Response
    {
        return Inertia::render('Category/Show', compact('category'));
    }//excellent

    public function create(): Response
    {
        return Inertia::render('Category/Create');
    }//excellent

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
        ]);

        Category::query()->create($validated);
        return redirect()->back();
    }//excellent

    public function edit(Category $category): Response
    {
        return Inertia::render('Category/Edit', compact('category'));
    }//excellent

    public function update(Category $category, Request $request): RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }//excellent

    public function destroy(Category $category): RedirectResponse
    {
        //we need to check if there are products inside this category.
        $category->delete();
        return redirect()->route('categories.index');
    }
}

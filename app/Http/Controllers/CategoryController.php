<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\Category\CategoryCreateServices;
use App\Services\Category\CategoryUpdateServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return Category::query()->get();
        return view('category.index', [
            'categories' => Category::query()->orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryCreateRequest $request, CategoryCreateServices $services): RedirectResponse
    {
        return $services->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return 123;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category, CategoryUpdateServices $services)
    {
        return $services->update($request->validated(), $category->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Category::query()->where('id', $id)->delete();
        return redirect()->route('category.index')->with('success', 'Категория успешно удалена');
    }
}

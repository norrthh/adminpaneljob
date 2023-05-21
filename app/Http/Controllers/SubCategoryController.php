<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategory\SubCategoryCreateRequest;
use App\Http\Requests\SubCategory\SubCategoryUpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\SubCategory\SubCategoryCreateServices;
use App\Services\SubCategory\SubCategoryUpdateServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subcategory.index',[
            'categories' => Category::query()->get(),
            'subCategories' => SubCategory::query()->get()
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
    public function store(SubCategoryCreateRequest $request, SubCategoryCreateServices $services)
    {
        return $services->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(SubCategoryUpdateRequest $request, int $id, SubCategoryUpdateServices $services)
    {
        return $services->update($request->validated(), $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        SubCategory::query()->where('id', $id)->delete();
        return redirect()->route('subcategory.index')->with('success', 'Вы успешно удалили под категорию');
    }
}

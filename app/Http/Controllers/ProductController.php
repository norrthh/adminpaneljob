<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            'categories' => Category::query()->get(),
            'subCategories' => SubCategory::query()->get(),
            'products' => Product::query()->get()
        ]);
    }


    public function store(ProductCreateRequest $request)
    {
        Product::query()->create($request->validated());
        return back()->with('success', 'Вы успешно создали продукт');
    }

    public function update(ProductUpdateRequest $request, string $id)
    {
        Product::query()->where('id', $id)->update($request->validated());
        return back()->with('success', 'Вы успешно обновили продукт');
    }


    public function destroy(string $id): RedirectResponse
    {
        Product::query()->where('id', $id)->delete();
        return back()->with('success', 'Вы успешно удалили продукт');
    }
}

<?php

namespace App\Services\SubCategory;

use App\Models\SubCategory;

class SubCategoryCreateServices
{
    public function create(array $data)
    {
        SubCategory::query()->create($data);
        return redirect()->route('subcategory.index')->with('success', 'Под категория успешно создана');
    }
}

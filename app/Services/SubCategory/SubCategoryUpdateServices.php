<?php

namespace App\Services\SubCategory;

use App\Models\SubCategory;

class SubCategoryUpdateServices
{
    public function update(array $data, int $id)
    {
        SubCategory::query()->where('id', $id)->update($data);
        return redirect()->route('subcategory.index')->with('success', 'Вы успешно обновили под категорию');
    }
}

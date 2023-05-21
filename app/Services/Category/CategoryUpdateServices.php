<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryUpdateServices extends CategoryServices
{
    public function update(array $data, int $id): RedirectResponse
    {
        Category::query()->where('id', $id)->update([
            'name' => $data['category'],
            'photo' => $data['file'],
            'slug' => $data['url'],
            'meta_tags' => $this->createJson($data['h1'], $data['descriptions'], $data['content'], $data['title']),
        ]);

        return redirect()->route('category.index')->with('success', 'Категория успешно обновлена');
    }
}

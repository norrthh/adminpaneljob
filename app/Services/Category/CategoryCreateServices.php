<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoryCreateServices extends CategoryServices
{
    public function create(array $data): RedirectResponse
    {
        $json = $this->createJson($data['h1'], $data['descriptions'], $data['content'], $data['title']);

        Category::query()->create([
            'name' => $data['category'],
            'photo' => $data['file'],
            'slug' => $data['url'],
            'meta_tags' => $json,
        ]);

        return redirect()->route('category.index')->with('success', 'Категория успешно создана');
    }
}

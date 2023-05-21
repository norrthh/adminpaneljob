<?php

namespace App\Services\Category;

class CategoryServices
{
    public function createJson(string $h1, string $descriptions, string $content, string $title)
    {
        return json_encode([
            'h1' => $h1,
            'description' => $descriptions,
            'content' => $content,
            'title' => $title
        ]);
    }
}

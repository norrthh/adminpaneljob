<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category' => ['string', 'required'],
            'file' => ['string', 'required'],
            'url' => ['string', 'required', 'unique:categories,slug'],
            'h1' => ['string', 'required'],
            'descriptions' => ['string', 'required'],
            'content' => ['string', 'required'],
            'title' => ['string', 'required'],
        ];
    }
}

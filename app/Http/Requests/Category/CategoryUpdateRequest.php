<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'category' => ['string', 'required'],
            'file' => ['string', 'required'],
            'url' => ['string', 'required'],
            'h1' => ['string', 'required'],
            'descriptions' => ['string', 'required'],
            'content' => ['string', 'required'],
            'title' => ['string', 'required'],
        ];
    }
}

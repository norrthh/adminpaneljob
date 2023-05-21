<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'sub_category_id' => ['required', 'integer'],
            'image' => ['required', 'string'],
            'address' => ['required', 'string'],
            'price' => ['required', 'string'],
        ];
    }
}

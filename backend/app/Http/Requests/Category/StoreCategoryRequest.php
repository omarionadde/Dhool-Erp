<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name'=>'required|string|max:255',

            'code'=>'required|string|max:50|unique:categories,code',

            'parent_id'=>'nullable|exists:categories,id',

            'description'=>'nullable|string',

            'image'=>'nullable|image|max:2048',

            'is_active'=>'boolean',

        ];
    }
}

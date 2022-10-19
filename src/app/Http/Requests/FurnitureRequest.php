<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class FurnitureRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'tension' => [
                'required',
                Rule::in(['110v', '220v']),
            ],
            'brand' => [
                'required',
                Rule::in(['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG']),
            ]
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'title' => 'Title is required',
            'description' => 'Description is required',
            'tension' => 'Tension is required',
            'brand' => 'Brand is required'
        ];
    }
}

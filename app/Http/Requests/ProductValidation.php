<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required|',
            'quantity' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => '|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ];
        
    }
    public function messages()
    {
    return[
        'name.required' => 'Please enter the name product.',
        'description.required' => 'Please enter the description product.',
        'price.required' => 'Please enter the price product.',
        'quantity.required' => 'Please enter the quantity product.',
        'image' => 'Please enter the image product.',
        'category_id.required' => 'Please enter the category product.',
    ];
    }
}

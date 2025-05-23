<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageProductRequest extends FormRequest
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
            'price' => ['required', 'numeric', 'gt:0'],
            'title' => ['required', 'regex:/^[A-Za-z0-9\s\-]+$/'],
            'slug' => ['required', 'regex:/^[A-Za-z0-9\-]+$/'],
            'description' => ['required', 'regex:/^[A-Za-z0-9\s\.,;:!?()\'"-]+$/'],
            'category_id' => ['required', 'exists:categories,id'],   
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'category_id' => (int) $this->category_id,
        'price' => str_replace(',', '.', $this->price),
        ]);
    }
}

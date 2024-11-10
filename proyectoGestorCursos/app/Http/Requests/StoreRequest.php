<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|min:6|max:255|unique:courses,title',
            'description' => 'required|string|min:6|max:1000',
            'curriculum' => 'required|string|min:6|max:2000',
            'content' => 'required|min:6|max:5000',
        ];
    }
}

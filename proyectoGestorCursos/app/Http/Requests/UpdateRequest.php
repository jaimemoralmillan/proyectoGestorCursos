<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {   
        $course_id = $this->route('id');
        $course = Course::FindOrFail($course_id);

        if ($course->author_id != Auth::user()->id) {
            return false;
        }
        
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
            'title' => 'nullable|min:6|max:255|unique:courses,title',
            'description' => 'nullable|string|min:6|max:1000',
            'curriculum' => 'nullable|string|min:6|max:2000',
            'content' => 'nullable|min:6|max:5000',
        ];
    }

}

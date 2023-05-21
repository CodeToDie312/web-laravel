<?php

namespace App\Http\Requests\Course;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DestroyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'course' =>[
                'required',
                Rule::exists(Course::class, 'id')
            ]
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge(['course' => $this->route('course')]);
    }
}

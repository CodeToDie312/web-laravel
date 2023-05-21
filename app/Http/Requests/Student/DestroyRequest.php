<?php

namespace App\Http\Requests\Student;

use App\Models\Student;
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
            'student' =>[
                'required',
                Rule::exists(Student::class, 'id')
            ]
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge(['student' => $this->route('student')]);
    }
}

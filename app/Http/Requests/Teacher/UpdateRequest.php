<?php

namespace App\Http\Requests\Teacher;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name'=>[
                'required',
                'string',
                'min:2',
                'max:50'
            ],
            'gender'=>[
                'nullable',
                'boolean',
            ],
            'birthdate'=>[
                'nullable',
                'date',
                'before:today',
            ],
            'status'=>[
                'nullable',
                'max:2'
            ],
            'salary' => [
                'nullable'
            ],
            'course_id'=>[
                'required',
                Rule::exists(Course::class, 'id'),
            ],
            'classroom_id'=>[
                'required',
                Rule::exists(Classroom::class, 'id')
            ]
        ];
    }
}

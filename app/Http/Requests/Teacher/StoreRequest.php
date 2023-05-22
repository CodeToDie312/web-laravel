<?php

namespace App\Http\Requests\Teacher;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
                'string'
            ],
            'birthdate'=>[
                'date',
                'before:today',
            ],
            'status'=>[
                'max:2'
            ],
            'salary' => [
                'number'
            ],
            'course_id'=>[
                'required'
            ],
            'classroom_id'=>[
                'required'
            ]
        ];
    }
}

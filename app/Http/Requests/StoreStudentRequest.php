<?php

namespace App\Http\Requests;

use App\Enums\StudentStatusEnum;
use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreStudentRequest extends FormRequest
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
                'max:50',
            ],
            'gender'=>[
                'required',
                'boolean',
             ],
            'birthdate'=>[
                'required',
                'date',
                'before:today',
            ],
//            'address'=>[
//                'required',
//                'string'
//
//            ],
            'status'=>[
                'required',
                Rule::in(StudentStatusEnum::asArray()),
            ],
            'course_id'=>[
                'required',
                Rule::exists(Course::class, 'id'),
            ],

        ];
    }
}

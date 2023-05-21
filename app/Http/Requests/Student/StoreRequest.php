<?php

namespace App\Http\Requests\Student;

use App\Enums\StudentStatusEnum;
use App\Models\Student;
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
                'max:50',
                'unique:App\Models\Student,name',
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
           'address'=>[
               'string'
           ],
            'status'=>[
                Rule::in(StudentStatusEnum::asArray()),
            ],
            'course_id'=>[
                Rule::exists(Course::class, 'id'),
            ],
        ];
    }

//    public function messages(): array
//    {
//        return [
//            'required' => ':attribute Phải Điền Đầy Đủ Thông Tin',
//        ];
//    }
//    public function attributes(): array
//    {
//        return [
//            'name' => 'name',
//        ];
//    }
}

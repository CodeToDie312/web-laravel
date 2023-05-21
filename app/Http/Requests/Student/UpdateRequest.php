<?php

namespace App\Http\Requests\Student;

use App\Enums\StudentStatusEnum;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
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
                   Rule::unique(Student::class)->ignore($this->student),
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
                   'required',
                   Rule::exists(Course::class, 'id'),
               ],


        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải điền',
            'unique'   => ':attribute đã được dùng',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Name',
        ];
    }
}

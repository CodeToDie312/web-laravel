<?php

namespace App\Http\Requests\Course;

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

    public function rules(): array
    {
        return [
            'name' => [
                'bail',
                'string',
                'required',
                'unique:App\Models\Course,name',
            ]
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

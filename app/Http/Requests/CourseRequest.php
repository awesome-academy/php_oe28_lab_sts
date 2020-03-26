<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:courses|string|max:255',
            'description' => 'required',
            'creator_id' => 'integer|max:100',
            'time' => 'date_format:H:i:s',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên khóa học không được để trống',
            'description.required' => 'Mô tả không được để trống',
            'time.required' => 'Thời gian không được để trống',
            'min' => ':attribute Không được nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
            'date_format' => 'Thời gian phải có  dạng hh:mm:ss',
            'name.unique' => 'Tên khóa học đã tồn tại',
        ];
    }

//    public function

}

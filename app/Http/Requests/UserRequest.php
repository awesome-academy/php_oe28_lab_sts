<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'full_name' => 'required|max:11',
            'email' => 'required|email',
            'phone' => 'required',
            'avatar' => 'mimes:jpeg,jpg,png|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Không được bỏ trống tên',
            'full_name.max' => 'Tên không vượt quá 11 kí tự',
            'email.required' => 'Không được bỏ trống email',
            'email.email' => 'Nhập đúng định dạng email',
            'phone.required' => 'Không được bỏ trống điện thoại',
            'avatar.mimes' => 'Ảnh đúng định dạng jpeg, jpg, png',
        ];
    }
}

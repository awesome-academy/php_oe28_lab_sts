<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|string|max:255',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username' => 'Tài khoản hoặc mật khấu sai',
            'password' => 'Nhập mật khẩu',
            'login.fail' => 'Sai Tài khoản hoăc mật khẩu',
            'username.required' => 'Tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
    }
}

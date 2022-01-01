<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'old_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'confirm_new_password' => 'required|min:6',

        ];
    }
    public function messages()
    {
        return [
        'old_password.required' => 'Chưa nhập mật khẩu cũ',
        'old_password.min' => 'Mật khẩu ít nhất 6 ký tự',

        'new_password.required' => 'Chưa nhập mật khẩu mới',
        'new_password.min' => 'Mật khẩu ít nhất 6 ký tự',

        'confirm_new_password.required' => 'Chưa nhập mật khẩu mới',
        'confirm_new_password.min' => 'Mật khẩu ít nhất 6 ký tự',   
        ];
    }
}

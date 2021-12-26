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
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_old_password'=>'required',
        ];
    }
    public function messages()
    {
        return [
        'confirm_old_password.required' => 'Chưa nhập lại mật khẩu cũ',
        'old_password.required' => 'Chưa nhập mật khẩu cũ',
        'new_password.required' => 'Chưa nhập mật khẩu mới',

        ];
    }
}

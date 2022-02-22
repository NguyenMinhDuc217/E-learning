<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThayDoiMatKhauRequest extends FormRequest
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
            'new_password' => 'required|max:10',
            'confirm_new_passwrod' => 'required|max10',
        ];
    }
    public function messages()
    {
        return [
        'new_password.required' => 'Chưa nhập mật khẩu mới',
        'confirm_new_password.required'=> 'Chưa nhập xác nhân mật khẩu mới',
        'new_password.max'=>'Độ dài tối đa 10 ký tự',
        'confirm_new_password.max'=>'Độ dài tối đa 10 ký tự',
        ];
    }
}

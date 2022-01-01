<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeRequest extends FormRequest
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
            'ten_dang_nhap' => 'required|max:10',
            'password' => 'required|min:6',
            'ho_ten'=>'required',
            'email'=>'required',
            'sdt'=>'required|numeric|min:10',          
        ];
    }
    public function messages()
    {
        return [
        'ten_dang_nhap.required' => 'Chưa nhập tên đăng nhập',
        'ten_dang_nhap.max'=>'Độ dài tối đa 10 ký tự',
        'password.required' => 'Chưa nhập mật khẩu',
        'password.min' => 'Mật khẩu ít nhất 6 ký tự',
        'ho_ten.required' => 'Chưa nhập họ tên',
        'email.required' => 'Chưa nhập địa chỉ email',
        'sdt.required' => 'Chưa nhập số điện thoại',
        'sdt.numeric' => 'Số điện thoại phải là số',
        'sdt.min' => 'Số điện thoại ít nhất 10 số',
        ];
    }
}

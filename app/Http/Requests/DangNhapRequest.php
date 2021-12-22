<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'mat_khau' => 'required'
        ];
    }
    public function messages()
    {
        return [
        'ten_dang_nhap.required' => 'Chưa nhập tên đăng nhập',
        'ten_dang_nhap.max'=>'Độ dài tối đa 10 ký tự',
        'mat_khau.required' => 'Chưa nhập mật khẩu'
        ];
    }
}

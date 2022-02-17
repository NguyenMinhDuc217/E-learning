<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\TaiKhoan;
use App\Models\ThongBaoMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Mail;
use App\Http\Validate;

class RegisterController extends Controller
{
    public function quenMatKhau(){
        return View('register/quen-mat-khau');
    }
    public function xlXacThuc(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
        ]);
        $tenmail=$request->email;
        $tk=TaiKhoan::where('email',$request->email)->first();

        $details = [
            'title' => $request->email,
            'body' => 'xác nhận mail',
        ];
        $idtk=$tk->id;
        $name=$tk->username;
        Mail::send('emails.myTestMail', compact('name','idtk'), function($email) use($tenmail,$name){
                $email->Subject('Quên mật khẩu');
                $email->to($tenmail,$name);
            }
        );
        return view('register/quen-mat-khau');
    }  

    public function formThayDoiMatKhau($id){
        $taikhoan=TaiKhoan::find($id);
        return View('register/thay-doi-mat-khau', compact('taikhoan'));
    }
    public function xlThayDoiMatKhau(Request $request, $id){
        $tk=TaiKhoan::find($id);
        if ($request->new_password != $request->confirm_new_password) {
            $message="Mật khẩu mới không trùng nhau";
            return  view('register/thay-doi-mat-khau',compact('message'));
        }
        else{
            $matkhau=$request->new_password;
            // if(Hash::check($matkhau,$tk->password)){   
            //     $tk->password=Hash::make($matkhau);
            //     $tk->save();
            //     $messageSuccess="Thay đổi thành công";
            //     return view('dang-nhap',compact('messageSuccess'));
            // }
            // else{
            //     $messageFail="Thay đổi không thành công";
            //     return  view('register/thay-doi-mat-khau',compact('messageFail'));
            // }
                $tk->password=Hash::make($matkhau);
                $tk->save();
                $messageSuccess="Thay đổi thành công";
                return view('login',compact('messageSuccess'));
        }
        
    }
}

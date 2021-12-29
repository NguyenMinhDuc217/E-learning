<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiaoVienMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user=Auth()->user()->loai_tai_khoan_id;
        $u=Auth::user();
        if($user==1){
            return redirect()-> route('trang-chu');
        }
        else if($user==2){
            return $next($request);
        }else{              
            return redirect()-> route('trang-chu-sinh-vien');
        }
        return redirect()->route('dang-nhap');
    }
}

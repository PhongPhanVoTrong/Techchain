<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        $user = Auth::guard('admin')->user();
        if ($user && $user->vaitro == 1) {
            return $next($request);
        } else {
            $request->session()->put('prevurl', url()->current());
            return redirect(url('admin/dangnhap'))
                ->with('thongbao', 'Bạn cần đăng nhập với vai trò admin');
        }
    }
}

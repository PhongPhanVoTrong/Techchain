<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view("admin/index");
    }

    function dangnhap()
    {
        return view("admin/login");
    }
    // xử lý đăng nhập
    function dangnhap_(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request['email'], 'password' => $request['matkhau']])) {
            $user = auth()->guard('admin')->user();
            if ($user->vaitro == 1) return redirect('admin/');
            else return back()->with('thongbao', 'Bạn không đủ quyền');
        } else return back()->with('thongbao', 'Email, Password không đúng');
    }

    // xử lý thoát đăng nhập
    function thoat()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/dangnhap')->with('thongbao', 'Bạn đã thoát admin');
    }
}

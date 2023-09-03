@extends('layout')
@section('title')
    Đăng ký thành viên
@endsection
@section('noidungchinh')
    <form method="post" action="{{ url('/dangky') }}" class="m-auto col-9 border border-primary rounded mt-5"> @csrf
        <h3 class="text-center mt-2">ĐĂNG KÝ THÀNH VIÊN</h3>
        <div class="m-3 mt-0 row">
            <div class="col-12">
                <label>Địa chỉ email của bạn</label>
                <input name="email" value="{{ old('email') }}" type="text"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('email')
                        {{ $message }}
                    @enderror </b>
                </div>
        </div>
        <div class="m-3 row">
            <div class="col-6">
                <label>Mật khẩu </label>
                <input name="mk1" value="{{ old('mk1') }}" type="password"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('mk1')
                        {{ $message }}
                    @enderror </b>
                </div>
            <div class="col-6">
                <label>Nhập lại mật khẩu </label>
                <input name="mk2" value="{{ old('mk2') }}" type="password"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('mk2')
                        {{ $message }}
                    @enderror </b>
                </div>
        </div>
        <div class="m-3 row">
            <div class="col-6">
                <label>Họ </label>
                <input name="ho" value="{{ old('ho') }}" type="text"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('ho')
                        {{ $message }}
                    @enderror </b>
                </div>
            <div class="col-6">
                <label class="col-3">Tên </label>
                <input name="ten" value="{{ old('ten') }}" type="text"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('ten')
                        {{ $message }}
                    @enderror </b>
                </div>
        </div>
        <div class="m-3 row">
            <div class="col-6">
                <label>Địa chỉ </label>
                <input name="diachi" value="{{ old('diachi') }}" type="text"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('diachi')
                        {{ $message }}
                    @enderror </b>
                </div>
            <div class="col-6">
                <label class="col-3">Điện thoại </label>
                <input name="dienthoai" value="{{ old('dienthoai') }}" type="text"
                    class="form-control border-primary shadow-none p-2">
                <b class="text-danger"> @error('dienthoai')
                        {{ $message }}
                    @enderror </b>
                </div>
        </div>
        <div class="m-3 row">
            <div><button class="btn btn-primary py-2 px-5"type="submit">Đăng ký</button></div>
        </div>
    </form>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<form method="post" action="{{url('admin/dangnhap')}}" class="m-auto col-6 border border-primary px-4 mt-5"> @csrf
    @if(Session::exists('thongbao'))
    <h5 class="alert alert-info text-center"> {{ Session::get('thongbao') }} </h5>
    @endif
    <div class="mb-3">
        <h3 class="text-center"> Quản trị viên đăng nhập</h3>
    </div>
    <div class="mb-3">
        <label>Email</label> <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Mật khẩu</label><input type="password" name="matkhau" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" name="btn" class="btn btn-primary">Đăng nhập</button>
    </div>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h3 class="alert alert-info p-2 text-center w-75 mx-auto mt-5">
    Bạn chưa xác thực email. <br>
    Hãy kiểm tra email và nhắp nút xác thực email để hoàn thành đăng ký tài khoản
</h3>
<form action="{{ route('verification.send') }}" method="post" class="w-75 mx-auto mt-3 text-center"> @csrf
    <button type="submit" class="btn btn-primary p-2"> Gửi lại email xác thực</button>
</form>

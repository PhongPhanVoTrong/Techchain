<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/fontawesome.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <title> @yield('title')</title>

</head>

<body>
    <div id="container">
        <header>
            @php
                $tongsoluong = 0;
                foreach (session('cart', []) as $c) {
                    $soluong = $c['soluong'];
                    $tongsoluong += $soluong;
                }
            @endphp
            <img src="/images/logo.png" id="logo" onclick="location.href='/'">
            <div id="giohang">Đang có {{ count(session('cart', [])) }} loại <br> {{ $tongsoluong }} sản phẩm
            </div>
            <div id="userinfo">
                @if (Auth::check())
                    Chào {{ Auth::user()->ho }} {{ Auth::user()->ten }}!
                    <a href="/thoat">Thoát <i class="fas fa-sign-out"></i></a>
                @else
                    <a href="/dangnhap">Đăng nhập <i class="fas fa-sign-in-alt"></i></a>
                    <br>
                    <a href="/dangky">Đăng ký <i class="fas fa-user-plus"></i></a>
                @endif
            </div>

            <div id="timkiem" class="col-10 p-2 mx-auto w-50" style="display: flex; justify-content: center">
                <form action="/timkiem" method="get" style="width: 500px; margin-top: 100px">
                    <input class="border border-primary p-2 col-6" style="width: 300px;" name="tukhoa"
                        placeholder="Từ khóa">
                    <button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
                </form>
            </div>
        </header>
        <nav>
            <ul>
                <li> <a href="/"> Trang chủ </a></li>
                @foreach ($loaisp as $loai)
                    <li>
                        <a href="/loai/{{ $loai->id_loai }}"> {{ $loai->ten_loai }} </a>
                    </li>
                @endforeach
                <li> <a href="/lienhe"> Liên hệ </a></li>
                <li> <a href="/hiengiohang"> Xem giỏ hàng </a></li>
            </ul>
        </nav>
        <main>
            @yield('noidungchinh')
        </main>
        <footer>
            Dự án Tech chain ! Phát triển bởi sinh viên Phan Võ Trọng Phong - PS25229
        </footer>
    </div>
</body>

</html>

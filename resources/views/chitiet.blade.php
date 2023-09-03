@extends('layout')
@section('noidungchinh')
    <div id='chitietsp'>
        <div>
            <img src="{{ $sp->hinh }}" alt="Hình sản phẩm">
        </div>
        <div>
            <h1> {{ $sp->ten_sp }} </h1>
            <div><span>Giá chính</span>: <del>{{ number_format($sp->gia, 0, ',', '.') }}</del> VNĐ</div>
            <div><span>Khuyến mãi</span>: {{ number_format($sp->gia_km, 0, ',', '.') }} VNĐ</div>
            <div><span>Ngày cập nhật</span>: {{ date('d/m/Y', strtotime($sp->ngay)) }}</div>
            <div><span>Số lượng</span>:
                <input size="4" type="number" id="soluong" min="1" max="50" value="1">
            </div>
            <div><span></span>
                <button class='btn btn-primary'>
                    <a href="/themvaogio/{{ $sp->id_sp }}/1" style="color: white; text-decoration: none">
                        Thêm vào giỏ
                    </a>
                </button>
                <button onclick='history.back()' class='btn btn-success'>Trở lại</button>
            </div>
        </div>
    </div>
    <div id="splienquan">
        <h4> Sản phẩm liên quan</h4>
        <div id="data">
            @foreach ($splienquan as $sp)
                <div class='sp'>
                    <h3><a href="/sp/{{ $sp->id_sp }}" style="text-decoration: none">{{ $sp->ten_sp }}</a></h3>
                    <img src="{{ $sp->hinh }}" onclick="location.href='/sp/{{ $sp->id_sp }}'"
                        alt="{{ $sp->ten_sp }}">
                </div>
            @endforeach
        </div>
    </div>
@endsection

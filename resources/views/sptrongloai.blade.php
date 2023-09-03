@extends('layout')
@section('noidungchinh')
    <div id='sptrongloai' class="listsp">
        <h1>Sản phẩm trong loại {{ $title }} </h1>
        <div id="data">
            @foreach ($listsp as $sp)
                <div class="sp">
                    <h3>{{ $sp->ten_sp }}</h3>
                    <img src="{{ $sp->hinh }}" onclick="location.href='/sp/{{ $sp->id_sp }}'" alt="{{ $sp->ten_sp }}">
                    <div class='gia'>{{ number_format($sp->gia, 0, ',', '.') }} VNĐ </div>
                    <button class='btnchon'>
                        <a href="/themvaogio/{{ $sp->id_sp }}/1">
                            Chọn
                        </a>
                    </button>
                    <button class="btnxem">
                        <a href="/sp/{{ $sp->id_sp }}">
                            Xem
                        </a>
                    </button>
                </div>
            @endforeach
        </div>
        <div class='p-2'> {{ $listsp->onEachSide(5)->links() }}</div>
    </div>
@endsection

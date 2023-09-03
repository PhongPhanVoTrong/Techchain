@extends('layout')
@section('noidungchinh')
    <div id='sptrongloai' class="listsp">
        <div id="data">
            @foreach ($ketqua as $sp)
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

        <div class='p-2'> {{ $ketqua->onEachSide(5)->links() }}</div>
    </div>
@endsection

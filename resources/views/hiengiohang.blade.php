@extends('layout')
@section('title')
    Giỏ hàng của bạn
@endsection
@section('noidungchinh')
    @if ($cart != null)
        <table class="table table-bordered m-auto" id="tblgiohang">
            <caption align="top">SẢN PHẨM BẠN ĐÃ CHỌN </caption>
            <tr>
                <thead class="text-center">
                    <th>Tên sản phẩm</th>
                    <th>Số lượng </th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>

                </thead>
            </tr>
            @php
                $tongtien = 0;
                $tongsoluong = 0;
                foreach ($cart as $c) {
                    $id_sp = $c['id_sp'];
                    $soluong = $c['soluong'];
                    $ten_sp = \DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('ten_sp');
                    $gia = \DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('gia');
                    $hinh = \DB::table('sanpham')
                        ->where('id_sp', '=', $id_sp)
                        ->value('hinh');
                    $thanhtien = $gia * $soluong;
                    $tongtien += $thanhtien;
                    $tongsoluong += $soluong;
                    $thanhtien = number_format($thanhtien, 0, ',', '.');
                    $gia = number_format($gia, 0, ',', '.');
                    echo "<tr>
                            <td><b>{$ten_sp}</b> </td>
                            <td><input type='number' value='{$soluong}' class='form-control'></td>
                            <td> {$gia} </td>
                            <td> {$thanhtien}</td>
                            <td>
                                <a href='/xoasptronggio/{$id_sp}'>Xóa</a>
                            </td>
                        </tr>";
                }
            @endphp
            <tr>
                <th colspan="5" class='text-center'>
                    Số sản phẩm {{ $tongsoluong }} .
                    Tổng tiền {{ number_format($tongtien, 0, ',', '.') }} VNĐ
                </th>
            </tr>
        </table>


        <button type="button" class="btn btn-primary" style="margin: 0 auto; display: block; margin-top: 20px"
            onclick="location.href='/thanhtoan'">Thanh
            toán</button>
    @else
        <h4 class="text-danger text-center p-2 bg-info">Chưa có sản phẩm trong giỏ hàng</h4>
    @endif
@endsection

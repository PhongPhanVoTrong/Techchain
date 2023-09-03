@extends('admin/layoutadmin')
@section('title') Danh sách các loại sản phẩm @endsection
@section('noidungchinh')
@if(Session::exists('thongbao'))
<h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
@endif
<table class="table table-bordered m-auto" id="dsLoai">
    <caption align="top">DANH SÁCH LOẠI SẢN PHẨM</caption>
    <tr>
        <th>Tên loại </th>
        <th>Thứ tự</th>
        <th>Ẩn hiện</th>
        <th>Sửa Xóa
        </th>
    </tr>
    @foreach($dsloai as $loai)
    <tr>
        <td>{{$loai->ten_loai}}</td>
        <td>{{$loai->thutu}}</td>
        <td>{{($loai->anhien==0)? "Đang ẩn":"Đang hiện"}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{route('loai.edit',$loai->id_loai)}}">Sửa </a>
            <form class="d-inline" action="{{ route('loai.destroy', $loai->id_loai) }}" method="POST">
                @csrf @method('DELETE')
                <button type='submit' onclick="return confirm('Xóa hả')" class="btn btn-danger btn-sm">
                    Xóa
                </button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
@endsection
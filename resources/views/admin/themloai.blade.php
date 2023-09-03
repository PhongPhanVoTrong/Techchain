@extends('admin/layoutadmin')
@section('title') Thêm loại sản phẩm @endsection
@section('noidungchinh')
<form class="m-auto " id="frm" method="post" action="{{route('loai.store')}}">
    @csrf
    <div class='mb-3'>
        <h4 class="m-0 text-center bg-info p-2">THÊM LOẠI SẢN PHẨM</h4>
    </div>
    <div class='mb-3 px-2'>
        <label> Tên loại</label> <input name="ten_loai" type="text" class="form-control">
    </div>
    <div class='mb-3 px-2'>
        <label> Thứ tự</label> <input name="thutu" type="number" class="form-control" min="1">
    </div>
    <div class='mb-3 px-2'>
        <label> Ẩn hiện</label>
        <input name="anhien" type="radio" value="0"> Ẩn
        <input name="anhien" type="radio" value="1" checked> Hiện
    </div>
    <div class='mb-3 px-2'>
        <button type="submit" class="btn-primary py-2 px-5 border-0"> Lưu database</button>
    </div>
</form>
@endsection
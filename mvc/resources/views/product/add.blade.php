@extends('layout_admin')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <div>
            <label for="ten_san_pham">Tên sản phẩm</label>
            <input type="text" name="ten_san_pham" id="ten_san_pham">
        </div>
        <div>
            <label for="gia">Giá sản phẩm</label>
            <input type="number" name="gia" id="gia">
        </div>
        <div>
            <label for="hinh_anh">Hình ảnh sản phẩm</label>
            <input type="file" name="hinh_anh" id="hinh_anh">
        </div>
        <div>
            <label for="mo_ta">Mô tả sản phẩm</label>
            <input type="text" name="mo_ta" id="mo_ta">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
@endsection
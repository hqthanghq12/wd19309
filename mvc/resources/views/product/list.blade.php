@extends('layout_admin')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <a href="http://localhost/wd19309/mvc/product-add">Thêm sản phẩm</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>
        @foreach ( $dataPro as $valuePro)
        <tr>
            <td>{{$valuePro->id}}</td>
            <td>{{$valuePro->ten_san_pham}}</td>
            <td>{{$valuePro->gia}}</td>
            <td>{{$valuePro->hinh_anh}}</td>
            <td>{{$valuePro->mo_ta}}</td>
            <td>
                <a href="">Sửa</a>
                <a href="">Xóa</a>
        </tr>
        @endforeach
    </table>
@endsection
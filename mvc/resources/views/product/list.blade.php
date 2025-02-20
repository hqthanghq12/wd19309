@extends('layout_admin')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('product-add')}}">Thêm sản phẩm</a>
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
            <td>
                <img src="{{storage($valuePro->hinh_anh)}}" 
                alt="" width="100px">
            </td>
            <td>{{$valuePro->mo_ta}}</td>
            <td>
                <a href="{{route('product-edit/{id}'
                , ['id' => $valuePro->id] )}}">Sửa</a>
                <a href="{{ route('product-delete/{id}'
                , ['id' => $valuePro->id] )}}">Xóa</a>
        </tr>
        @endforeach
    </table>
@endsection
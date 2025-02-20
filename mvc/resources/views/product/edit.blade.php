@extends('layout_admin')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <div>
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (isset($_SESSION['success']) && isset($_GET['msg']))
        <div>{{$_SESSION['success']}}</div>
    @endif
    <form method="post" 
    action="{{route('product-update/{id}', ['id'=>$data->id])}}" 
    enctype="multipart/form-data">
        <div>
            <label for="ten_san_pham">Tên sản phẩm</label>
            <input type="text" 
            name="ten_san_pham"
            id="ten_san_pham" 
            value="{{$data->ten_san_pham}}">
        </div>
        <div>
            <label for="gia">Giá sản phẩm</label>
            <input type="number" name="gia" id="gia" value="{{$data->gia}}">
        </div>
        <div>
            <label for="hinh_anh">Hình ảnh sản phẩm</label>
            <input type="file" name="hinh_anh" id="hinh_anh" >
            <img src="{{storage($data->hinh_anh)}}" alt="" width="100px">
        </div>
        <div>
            <label for="mo_ta">Mô tả sản phẩm</label>
            <input type="text" name="mo_ta" id="mo_ta" value="{{$data->mo_ta}}">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
@endsection
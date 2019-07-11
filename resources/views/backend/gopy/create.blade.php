@extends('backend.layout.master')

@section('title')
Thêm mới Góp ý
@endsection

@section('feature-title')
Thêm mới Góp ý
@endsection

@section('feature-description')
Thêm mới Góp ý. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<!-- Thêm mã hóa để có thể upload file -->
<form method="post" action="{{ route('backend.gopy.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="gy_ma">Loại sản phẩm</label>
        <select name="gy_ma" class="form-control">
            @foreach($danhsachloai as $loai)
                @if(old('l_ma') == $loai->l_ma)
                <option value="{{ $loai->l_ma }}" selected>{{ $loai->l_ten }}</option>
                @else
                <option value="{{ $loai->l_ma }}">{{ $loai->l_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="sp_ten">Tên sản phẩm</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten') }}">
    </div>
    <div class="form-group">
        <label for="sp_giaGoc">Giá gốc</label>
        <input type="number" class="form-control" id="sp_giaGoc" name="sp_giaGoc" value="{{ old('sp_giaGoc') }}">
    </div>
    <div class="form-group">
        <label for="sp_giaGoc">Giá bán</label>
        <input type="number" class="form-control" id="sp_giaBan" name="sp_giaBan" value="{{ old('sp_giaBan') }}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="sp_hinh" type="file" name="sp_hinh">
        </div>
    </div>
    <div class="form-group">
        <label for="sp_thongTin">Thông tin</label>
        <input type="text" class="form-control" id="sp_thongTin" name="sp_thongTin" value="{{ old('sp_thongTin') }}">
    </div>
    <div class="form-group">
        <label for="sp_danhGia">Đánh giá</label>
        <input type="text" class="form-control" id="sp_danhGia" name="sp_danhGia" value="{{ old('sp_danhGia') }}">
    </div>
    <select name="sp_trangThai" class="form-control">
        <option value="1" {{ old('sp_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('sp_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <button class="btn btn-primary">Lưu</button>
</form>
@endsection

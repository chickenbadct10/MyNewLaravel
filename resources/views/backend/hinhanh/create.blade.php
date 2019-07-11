@extends('backend.layout.master')
@section('title')
    Danh sách Màu
@endsection
@section('title-chucnang')
    Chức năng quản Màu
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.hinhanh.store')}}">
    @csrf
    <form>
            <div class="form-group">
              <label for="ha_ten"> Màu tên:</label>
              <input type="text" class="form-control" name="m_ten" id="m_ten" aria-describedby="m_tenHelp" placeholder="Nhập tên màu">
              <small id="m_tenHelp" class="form-text text-muted">Nhập tên màu giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.mau.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

@extends('backend.layout.master')
@section('title')
    Danh sách loại
@endsection
@section('title-chucnang')
    Chức năng quản trị Loại
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.loai.store')}}">
    @csrf
    <form>
            <div class="form-group">
              <label for="l_ten"> Loại tên:</label>
              <input type="text" class="form-control" name="l_ten" id="l_ten" aria-describedby="l_tenHelp" placeholder="Nhập tên chủ đề">
              <small id="l_tenHelp" class="form-text text-muted">Nhập tên loại giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.loai.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

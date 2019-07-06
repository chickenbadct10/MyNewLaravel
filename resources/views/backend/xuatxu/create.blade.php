@extends('backend.layout.master')
@section('title')
    Danh sách Xuất xứ
@endsection
@section('title-chucnang')
    Chức năng quản Xuất xứ
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.xuatxu.store')}}">
    @csrf
    <form>
            <div class="form-group">
              <label for="xx_ten"> Xuất xứ tên:</label>
              <input type="text" class="form-control" name="xx_ten" id="xx_ten" aria-describedby="xx_tenHelp" placeholder="Nhập tên xuất xứ">
              <small id="xx_tenHelp" class="form-text text-muted">Nhập tên xuất xứ giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.xuatxu.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

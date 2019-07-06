@extends('backend.layout.master')
@section('title')
    Danh sách chủ đề
@endsection
@section('title-chucnang')
    Chức năng quản trị Chủ Đề
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.chude.store')}}">
        @csrf
        <form>
                <div class="form-group">
                  <label for="cd_ten"> Chủ đề tên:</label>
                  <input type="text" class="form-control" name="cd_ten" id="cd_ten" aria-describedby="cd_tenHelp" placeholder="Nhập tên chủ đề">
                  <small id="cd_tenHelp" class="form-text text-muted">Nhập tên chủ đề giới hạn 50 ký tự</small>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a type="button" href="{{route('backend.chude.index')}}" class="btn btn-warning">Trở về</a>

        </form>
</form>
@endsection

@extends('backend.layout.master')
@section('title')
    Danh sách Quyền
@endsection
@section('title-chucnang')
    Chức năng quản Quyền
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.quyen.store')}}">
    @csrf
    <form>
            <div class="form-group">
              <label for="q_ten"> Quyền tên:</label>
              <input type="text" class="form-control" name="q_ten" id="q_ten" aria-describedby="q_tenHelp" placeholder="Nhập tên quyền">
              <small id="q_tenHelp" class="form-text text-muted">Nhập tên quyền giới hạn 50 ký tự</small>
              <label for="q_dienGiai"> Diễn giải:</label>
              <input type="text" class="form-control" name="q_dienGiai" id="q_dienGiai" aria-describedby="q_dienGiaiHelp" placeholder="Nhập diễn giải quyền">
              <small id="q_dienGiaiHelp" class="form-text text-muted">Nhập tên diễn giải giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.quyen.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

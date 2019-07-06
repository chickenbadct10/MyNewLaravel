@extends('backend.layout.master')
@section('title')
    Danh sách Quyền
@endsection
@section('title-chucnang')
    Chức năng quản trị Quyền
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.quyen.update',['id' =>$quyen->q_ma])}}}">
        @csrf
        <form>
                <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group">
                      <label for="q_ten"> Thanh toán tên:</label>
                      <input type="text" class="form-control" name="q_ten" id="q_ten" aria-describedby="q_tenHelp" value="{{$quyen->q_ten}}">
                      <small id="q_tenHelp" class="form-text text-muted">Nhập tên quyền giới hạn 50 ký tự</small>
                      <label for="q_dienGiai"> Diễn giải:</label>
                      <input type="text" class="form-control" name="q_dienGiai" id="q_dienGiai" aria-describedby="q_dienGiaiHelp" value="{{$quyen->q_dienGiai}}">
                      <small id="q_dienGiaiHelp" class="form-text text-muted">Nhập diễn giải giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

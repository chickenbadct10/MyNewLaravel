@extends('backend.layout.master')
@section('title')
    Danh sách Thanh toán
@endsection
@section('title-chucnang')
    Chức năng quản trị Thanh toán
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.thanhtoan.store')}}">
    @csrf
    <form>
            <div class="form-group">
                <label for="tt_ten"> Thanh toán tên:</label>
                <input type="text" class="form-control" name="tt_ten" id="tt_ten" aria-describedby="tt_tenHelp" placeholder="Nhập tên thanh toán">
                <small id="tt_tenHelp" class="form-text text-muted">Nhập tên thanh toán giới hạn 50 ký tự</small>
                <label for="tt_dienGiai"> Diễn giải:</label>
                <input type="text" class="form-control" name="tt_dienGiai" id="tt_dienGiai" aria-describedby="tt_dienGiaiHelp" placeholder="Nhập diễn giải thanh toán">
                <small id="tt_dienGiaiHelp" class="form-text text-muted">Nhập diễn giải giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.thanhtoan.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

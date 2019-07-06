@extends('backend.layout.master')
@section('title')
    Danh sách phương thức Thanh toán
@endsection
@section('title-chucnang')
    Chức năng quản trị phương thức Thanh toán
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.thanhtoan.update',['id' =>$thanhtoan->tt_ma])}}}">
        @csrf
        <form>
                <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group">
                      <label for="tt_ten"> Thanh toán tên:</label>
                      <input type="text" class="form-control" name="tt_ten" id="tt_ten" aria-describedby="tt_tenHelp" value="{{$thanhtoan->tt_ten}}">
                      <small id="tt_tenHelp" class="form-text text-muted">Nhập tên Thanh toán giới hạn 50 ký tự</small>
                      <label for="tt_dienGiai"> Diễn giải:</label>
                      <input type="text" class="form-control" name="tt_dienGiai" id="tt_dienGiai" aria-describedby="tt_dienGiaiHelp" value="{{$thanhtoan->tt_dienGiai}}">
                      <small id="tt_dienGiaiHelp" class="form-text text-muted">Nhập diễn giải giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

@extends('backend.layout.master')
@section('title')
    Danh sách Xuất xứ
@endsection
@section('title-chucnang')
    Chức năng quản trị Xuất xứ
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.xuatxu.update',['id' =>$xuatxu->xx_ma])}}}">
        @csrf
        <form>
                    <div class="form-group">
                      <label for="xx_ten"> Xuất xứ tên:</label>
                      <input type="text" class="form-control" name="xx_ten" id="xx_ten" aria-describedby="xx_tenHelp" value="{{$xuatxu->xx_ten}}">
                      <small id="xx_tenHelp" class="form-text text-muted">Nhập tên xuất xứ giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

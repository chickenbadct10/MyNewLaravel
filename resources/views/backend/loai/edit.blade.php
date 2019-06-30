@extends('backend.layout.master')
@section('title')
    Danh sách Loại
@endsection
@section('title-chucnang')
    Chức năng quản trị Loại
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.loai.update',['id' =>$loai->l_ma])}}}">
        @csrf
        <form>
                <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group">
                      <label for="l_ten"> Loại tên:</label>
                      <input type="text" class="form-control" name="l_ten" id="l_ten" aria-describedby="l_tenHelp" value="{{$loai->l_ten}}">
                      <small id="l_tenHelp" class="form-text text-muted">Nhập tên Loại giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

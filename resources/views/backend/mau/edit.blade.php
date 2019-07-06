@extends('backend.layout.master')
@section('title')
    Danh sách Loại
@endsection
@section('title-chucnang')
    Chức năng quản trị Màu
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.mau.update',['id' =>$mau->m_ma])}}}">
        @csrf
        <form>
                <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group">
                      <label for="m_ten"> Màu tên:</label>
                      <input type="text" class="form-control" name="m_ten" id="m_ten" aria-describedby="m_tenHelp" value="{{$mau->m_ten}}">
                      <small id="m_tenHelp" class="form-text text-muted">Nhập tên màu giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

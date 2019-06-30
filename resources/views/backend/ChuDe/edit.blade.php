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
<form method="post" action="{{route('backend.chude.update',['id' =>$chude->cd_ma])}}}">
        @csrf
        <form>
            <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group">
                  <label for="cd_ten"> Chủ đề tên:</label>
                  <input type="text" class="form-control" name="cd_ten" id="cd_ten" aria-describedby="cd_tenHelp" value="{{$chude->cd_ten}}">
                  <small id="cd_tenHelp" class="form-text text-muted">Nhập tên chủ đề giới hạn 50 ký tự</small>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
</form>
@endsection

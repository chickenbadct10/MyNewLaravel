@extends('backend.layout.master')
@section('title')
    Danh sách phương thức Vận chuyển
@endsection
@section('title-chucnang')
    Chức năng quản trị phương thức Vận chuyển
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.vanchuyen.update',['id' =>$vanchuyen->vc_ma])}}}">
        @csrf
        <form>
                <input type="hidden" name="_method" value="PUT"/>
                    <div class="form-group">
                      <label for="vc_ten"> Vận chuyển tên:</label>
                      <input type="text" class="form-control" name="vc_ten" id="vc_ten" aria-describedby="vc_tenHelp" value="{{$vanchuyen->vc_ten}}">
                      <small id="vc_tenHelp" class="form-text text-muted">Nhập tên Loại giới hạn 50 ký tự</small>
                      <label for="vc_chiPhi"> Chi phí:</label>
                      <input type="number" class="form-control" name="vc_chiPhi" id="vc_chiPhi" aria-describedby="vc_chiPhiHelp" value="{{$vanchuyen->vc_chiPhi}}">
                      <small id="vc_chiPhiHelp" class="form-text text-muted">Nhập chi phí vận chuyển bằng số</small>
                      <label for="vc_dienGiai"> Diễn giải:</label>
                      <input type="text" class="form-control" name="vc_dienGiai" id="vc_dienGiai" aria-describedby="vc_dienGiaiHelp" value="{{$vanchuyen->vc_dienGiai}}">
                      <small id="vc_dienGiaiHelp" class="form-text text-muted">Nhập diễn giải giới hạn 50 ký tự</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
</form>
@endsection

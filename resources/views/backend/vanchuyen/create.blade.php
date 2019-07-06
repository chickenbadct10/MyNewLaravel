@extends('backend.layout.master')
@section('title')
    Danh sách vận chuyển
@endsection
@section('title-chucnang')
    Chức năng quản trị Vận chuyển
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.vanchuyen.store')}}">
    @csrf
    <form>
            <div class="form-group">
                <label for="vc_ten"> Vận chuyển tên:</label>
                <input type="text" class="form-control" name="vc_ten" id="vc_ten" aria-describedby="vc_tenHelp" placeholder="Nhập tên vận chuyển">
                <small id="vc_tenHelp" class="form-text text-muted">Nhập tên vận chuyển giới hạn 50 ký tự</small>
                <label for="vc_chiPhi"> Chi phí:</label>
                <input type="number" class="form-control" name="vc_chiPhi" id="vc_chiPhi" aria-describedby="vc_chiPhiHelp" placeholder="Nhập chi phí vận chuyển">
                <small id="vc_chiPhiHelp" class="form-text text-muted">Nhập chi phí vận chuyển bằng số</small>
                <label for="vc_dienGiai"> Diễn giải:</label>
                <input type="text" class="form-control" name="vc_dienGiai" id="vc_dienGiai" aria-describedby="vc_dienGiaiHelp" placeholder="Nhập diễn giải vận chuyển">
                <small id="vc_dienGiaiHelp" class="form-text text-muted">Nhập diễn giải giới hạn 50 ký tự</small>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a type="button" href="{{route('backend.vanchuyen.index')}}" class="btn btn-warning">Trở về</a>

    </form>
</form>
@endsection

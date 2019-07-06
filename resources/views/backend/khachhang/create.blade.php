@extends('backend.layout.master')
@section('title')
    Danh sách khách hàng
@endsection
@section('title-chucnang')
    Chức năng quản trị Khách hàng
@endsection
@section('feature-description')
Xem nhanh toàn hệ thống
@endsection
@section('content')
<form method="post" action="{{route('backend.khachhang.store')}}">
        @csrf
        <form>
                <div class="form-group">
                    <label for="kh_taiKhoan"> Tài khoản:</label>
                    <input type="text" maxlength="20" class="form-control" name="kh_taiKhoan" id="kh_taiKhoan" aria-describedby="kh_taiKhoanHelp" placeholder="Nhập tài khoản khách hàng">
                    <small id="kh_taiKhoanHelp" class="form-text text-muted">Nhập tên tài khoản giới hạn 20 ký tự</small>
                </div>
                <div class="form-group">
                    <label for="kh_matKhau"> mật khẩu:</label>
                    <input type="text" class="form-control"  maxlength="20"  name="kh_matKhau" id="kh_matKhau" aria-describedby="kh_matKhauHelp" placeholder="Nhập mật khẩu khách hàng">
                    <small id="kh_matKhauHelp" class="form-text text-muted">Nhập mật khẩu giới hạn 20 ký tự</small>
                </div>
                <div class="form-group">
                  <label for="kh_hoTen"> Họ và tên:</label>
                  <input type="text" class="form-control" maxlength="50" name="kh_hoTen" id="kh_hoTen" aria-describedby="kh_hoTenHelp" placeholder="Nhập tên khách hàng">
                  <small id="kh_hoTenHelp" class="form-text text-muted">Nhập họ tên khách hàng giới hạn 50 ký tự</small>
                </div>
                <div class="form-group">
                    <label for="kh_gioiTinh"> Giới tính:</label>
                    <br/>
                <label class="btn btn-light">
                    <input type="radio" name="kh_gioiTinh" id="kh_gioiTinh" value="1"> Nam
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="kh_gioiTinh" id="kh_gioiTinh" value="0"> Nữ
                  </label>
                  <small id="kh_gioiTinhHelp" class="form-text text-muted">Chọn giới tính khách hàng</small>
                </div>
                <div class="form-group">
                    <label for="kh_email"> Email:</label>
                    <input type="email" class="form-control" name="kh_email" id="kh_email" aria-describedby="kh_emailHelp" placeholder="Nhập email">
                    <small id="kh_emailHelp" class="form-text text-muted">Nhập email khách hàng</small>
                </div>
                <div class="form-group">
                    <label for="kh_ngaySinh">Ngày sinh:</label>
                    <input type="text" class="form-control" name="kh_ngaySinh" id="kh_ngaySinh" aria-describedby="kh_ngaySinhHelp" placeholder="Nhập ngày sinh khách hàng">
                    <small id="kh_ngaySinhHelp" class="form-text text-muted">Nhập ngày sinh</small>
                </div>
                <div class="form-group">
                        <label for="kh_diaChi">Địa chỉ:</label>
                        <input type="text" class="form-control" name="kh_diaChi" id="kh_diaChi" aria-describedby="kh_diaChiHelp" placeholder="Nhập địa chỉ khách hàng">
                        <small id="kh_diaChiHelp" class="form-text text-muted">Nhập địa chỉ</small>
                </div>
                <div class="form-group">
                        <label for="kh_dienThoai">Điện thoại:</label>
                        <input type="text" class="form-control" name="kh_dienThoai" id="kh_dienThoai" aria-describedby="kh_dienThoaiHelp" placeholder="Nhập số điện thoại khách hàng">
                        <small id="kh_dienThoaiHelp" class="form-text text-muted">Nhập số điện thoại</small>
                </div>
                <div class="form-group">
                <select name="kh_trangThai" class="form-control">
                        <option value="1" {{ old('kh_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
                        <option value="2" {{ old('kh_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
                        <option value="3" {{ old('kh_trangThai') == 3 ? "selected" : "" }}>Chưa kích hoạt</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a type="button" href="{{route('backend.khachhang.index')}}" class="btn btn-primary">Trở về</a>

        </form>
</form>
@endsection

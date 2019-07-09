<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Chức năng đăng nhập
// Xác thực Routes...
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');
// Đăng ký Routes...
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\RegisterController@register');
// Quên mật khẩu Routes...
Route::get('/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/admin/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
// Group middleware quản lý chức năng khi login mới được sử dụng
Route::group(['middleware' => 'auth'], function(){
    //Route danh sách  Sản phẩm
    Route::get('/sanpham', 'SanPhamController@index')->name('backend.sanpham.index');
    Route::get('/sanpham/themmoi', 'SanPhamController@create')->name('backend.sanpham.create');
    Route::post('/sanpham/store', 'SanPhamController@store')->name('backend.sanpham.store');
    Route::get('/sanpham/edit/{id}', 'SanPhamController@edit')->name('backend.sanpham.edit');
    Route::put('/sanpham/update/{id}', 'SanPhamController@update')->name('backend.sanpham.update');
    Route::delete('/sanpham/delete/{id}', 'SanPhamController@destroy')->name('backend.sanpham.destroy');
    Route::get('/sanpham/print', 'SanPhamController@print')->name('backend.sanpham.print');
    Route::get('/sanpham/pdf', 'SanPhamController@pdf')->name('backend.sanpham.pdf');
    Route::get('/admin/loai', 'LoaiController@index')->name('backend.loai.index');
    //Loại
    Route::get('/admin/loai/themmoi', 'LoaiController@create')->name('backend.loai.create');
    Route::post('/admin/loai/store', 'LoaiController@store')->name('backend.loai.store');
    Route::get('/admin/loai/edit/{id}', 'LoaiController@edit')->name('backend.loai.edit');
    Route::put('/admin/loai/update/{id}', 'LoaiController@update')->name('backend.loai.update');
    Route::delete('/admin/loai/delete/{id}', 'LoaiController@destroy')->name('backend.loai.destroy');
    //Route danh sách chủ đề
    Route::get('/admin/chude', 'ChuDeController@index')->name('backend.chude.index');
    Route::get('/admin/chude/themmoi', 'ChuDeController@create')->name('backend.chude.create');
    Route::post('/admin/chude/store', 'ChuDeController@store')->name('backend.chude.store');
    Route::get('/admin/chude/edit/{id}', 'ChuDeController@edit')->name('backend.chude.edit');
    Route::put('/admin/chude/update/{id}', 'ChuDeController@update')->name('backend.chude.update');
    Route::delete('/admin/chude/delete/{id}', 'ChuDeController@destroy')->name('backend.chude.destroy');
    Route::get('/admin/chude/pdf', 'ChuDeController@pdf')->name('backend.chude.pdf');

    //Route danh sách vận chuyển
    Route::get('/vanchuyen', 'VanChuyenController@index')->name('backend.vanchuyen.index');
    Route::get('/vanchuyen/themmoi', 'VanChuyenController@create')->name('backend.vanchuyen.create');
    Route::post('/vanchuyen/store', 'VanChuyenController@store')->name('backend.vanchuyen.store');
    Route::get('/vanchuyen/edit/{id}', 'VanChuyenController@edit')->name('backend.vanchuyen.edit');
    Route::put('/vanchuyen/update/{id}', 'VanChuyenController@update')->name('backend.vanchuyen.update');
    Route::delete('/vanchuyen/delete/{id}', 'VanChuyenController@destroy')->name('backend.vanchuyen.destroy');


    //Route danh sách thanh toán
    Route::get('/thanhtoan', 'ThanhToanController@index')->name('backend.thanhtoan.index');
    Route::get('/thanhtoan/themmoi', 'ThanhToanController@create')->name('backend.thanhtoan.create');
    Route::post('/thanhtoan/store', 'ThanhToanController@store')->name('backend.thanhtoan.store');
    Route::get('/thanhtoan/edit/{id}', 'ThanhToanController@edit')->name('backend.thanhtoan.edit');
    Route::put('/thanhtoan/update/{id}', 'ThanhToanController@update')->name('backend.thanhtoan.update');
    Route::delete('/thanhtoan/delete/{id}', 'ThanhToanController@destroy')->name('backend.thanhtoan.destroy');

    //Route danh sách Xuất xứ
    Route::get('/xuatxu', 'XuatxuController@index')->name('backend.xuatxu.index');
    Route::get('/xuatxu/themmoi', 'XuatxuController@create')->name('backend.xuatxu.create');
    Route::post('/xuatxu/store', 'XuatxuController@store')->name('backend.xuatxu.store');
    Route::get('/xuatxu/edit/{id}', 'XuatxuController@edit')->name('backend.xuatxu.edit');
    Route::put('/xuatxu/update/{id}', 'XuatxuController@update')->name('backend.xuatxu.update');
    Route::delete('/xuatxu/delete/{id}', 'XuatxuController@destroy')->name('backend.xuatxu.destroy');

    //Route danh sách Mẫu
    Route::get('/mau', 'MauController@index')->name('backend.mau.index');
    Route::get('/mau/themmoi', 'MauController@create')->name('backend.mau.create');
    Route::post('/mau/store', 'MauController@store')->name('backend.mau.store');
    Route::get('/mau/edit/{id}', 'MauController@edit')->name('backend.mau.edit');
    Route::put('/mau/update/{id}', 'MauController@update')->name('backend.mau.update');
    Route::delete('/mau/delete/{id}', 'MauController@destroy')->name('backend.mau.destroy');
    Route::get('/mau/pdf', 'MauController@pdf')->name('backend.mau.pdf');

    //Route danh sách Quyền
    Route::get('/quyen', 'QuyenController@index')->name('backend.quyen.index');
    Route::get('/quyen/themmoi', 'QuyenController@create')->name('backend.quyen.create');
    Route::post('/quyen/store', 'QuyenController@store')->name('backend.quyen.store');
    Route::get('/quyen/edit/{id}', 'QuyenController@edit')->name('backend.quyen.edit');
    Route::put('/quyen/update/{id}', 'QuyenController@update')->name('backend.quyen.update');
    Route::delete('/quyen/delete/{id}', 'QuyenController@destroy')->name('backend.quyen.destroy');

    //Route danh sách Khách hàng
    Route::get('/khachhang', 'KhachhangController@index')->name('backend.khachhang.index');
    Route::get('/khachhang/themmoi', 'KhachhangController@create')->name('backend.khachhang.create');
    Route::post('/khachhang/store', 'KhachhangController@store')->name('backend.khachhang.store');
    Route::get('/khachhang/edit/{id}', 'KhachhangController@edit')->name('backend.khachhang.edit');
    Route::put('/khachhang/update/{id}', 'KhachhangController@update')->name('backend.khachhang.update');
    Route::delete('/khachhang/delete/{id}', 'KhachhangController@destroy')->name('backend.khachhang.destroy');


    //Route danh sách nhân viên
    Route::get('/nhanvien', 'NhanVienController@index')->name('backend.nhanvien.index');
    Route::get('/nhanvien/themmoi', 'NhanVienController@create')->name('backend.nhanvien.create');
    Route::post('/nhanvien/store', 'NhanVienController@store')->name('backend.nhanvien.store');
    Route::get('/nhanvien/edit/{id}', 'NhanVienController@edit')->name('backend.nhanvien.edit');
    Route::put('/nhanvien/update/{id}', 'NhanVienController@update')->name('backend.nhanvien.update');
    Route::delete('/nhanvien/delete/{id}', 'NhanVienController@destroy')->name('backend.nhanvien.destroy');
    Route::get('/nhanvien/print', 'NhanVienController@print')->name('backend.nhanvien.print');
    Route::get('/nhanvien/pdf', 'NhanVienController@pdf')->name('backend.nhanvien.pdf');
    //Route danh sách nhà cung cấp
    Route::get('/nhacungcap', 'NhaCungCapController@index')->name('backend.nhacungcap.index');
    Route::get('/nhacungcap/themmoi', 'NhaCungCapController@create')->name('backend.nhacungcap.create');
    Route::post('/nhacungcap/store', 'NhaCungCapController@store')->name('backend.nhacungcap.store');
    Route::get('/nhacungcap/edit/{id}', 'NhaCungCapController@edit')->name('backend.nhacungcap.edit');
    Route::put('/nhacungcap/update/{id}', 'NhaCungCapController@update')->name('backend.nhacungcap.update');
    Route::delete('/nhacungcap/delete/{id}', 'NhaCungCapController@destroy')->name('backend.nhacungcap.destroy');
    Route::get('/nhacungcap/print', 'NhaCungCapController@print')->name('backend.nhacungcap.print');
    Route::get('/nhacungcap/pdf', 'NhaCungCapController@pdf')->name('backend.nhacungcap.pdf');
    //Route dành cho backend
    Route::get('/admin/','BackendController@dashboard')->name('backend.dashboard');
});

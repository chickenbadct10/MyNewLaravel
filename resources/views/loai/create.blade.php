<form method="post" action="{{route('loai.store')}}">
    @csrf
    Loại tên: <input type="text" name="l_ten" placeholder="Nhập loại tên"/>
    <button>Cập nhật</button>
</form>

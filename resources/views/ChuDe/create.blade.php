<form method="post" action="{{route('chude.store')}}">
        @csrf
        Chủ đề tên: <input type="text" name="cd_ten" placeholder="Nhập chủ đề tên"/>
        <button>Cập nhật</button>
    </form>

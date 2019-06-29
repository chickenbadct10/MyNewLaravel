<form method="post" action="{{route('loai.update',['id' =>$loai->l_ma])}}}">
        @csrf
        <input type="hidden" name="_method" value="PUT"/>
        Loại tên: <input type="text" name="l_ten" placeholder="Nhập chủ đề tên" value="{{$loai->l_ten}}"/>
        <button>Cập nhật</button>
    </form>

<form method="post" action="{{route('chude.update',['id' =>$chude->cd_ma])}}}">
        @csrf
        <input type="hidden" name="_method" value="PUT"/>
        Chủ đề tên: <input type="text" name="cd_ten" placeholder="Nhập chủ đề tên" value="{{$chude->cd_ten}}"/>
        <button>Cập nhật</button>
    </form>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh Sách Chủ Đề</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
        <script>
                function myFunction() {
                  document.getElementById("button").click();
                }
        </script>
<div class="container">
  <p style="text-align: center;font-size:30px;">Màn hình danh sách <span style="color: red; font-size:35px;">chủ đề</p>
    <button type="submit" class="btn btn-success" onclick="myFunction()">Thêm mới chủ đề</button>
    <a  href="{{route('chude.create')}}" style="display:none" id="button"></a>
    <br/>
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã chủ đề</th>
        <th>Tên chủ đề</th>
        <th>Sửa </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($danhsachchude as $chude)
            <tr>
                <th>{{$loop->index + 1}}</th>
                <th>{{$chude ->cd_ma}}</th>
                <th>{{$chude ->cd_ten}}</th>
                <th>
                    <a href="{{route('chude.edit',['id' =>$chude->cd_ma])}}">Sửa</a>
                    <form method="post" action='{{route('chude.destroy',['id' =>$chude->cd_ma])}}'>
                       @csrf
                       <input type="hidden" name="_method" value="DELETE"/>
                       <button>Xóa </button>
                    </form>
                </th>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

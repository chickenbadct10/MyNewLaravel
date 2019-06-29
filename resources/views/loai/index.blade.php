<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh sách Loại</title>
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
  <p style="text-align: center;font-size:30px;">Màn hình danh sách <span style="color:red;font-size:35px;">Loại</span></p>
  <button type="submit" class="btn btn-success" onclick="myFunction()">Thêm mới loại</button>
  <a  href="{{route('loai.create')}}" style="display:none" id="button"></a>
  <br/>
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Loại mã</th>
        <th>Loại tên</th>
      </tr>
    </thead>
    <tbody>
          @foreach ($danhsachloai as $loai)
          <tr>
            <th>{{$loop->index + 1}}</th>
            <th>{{$loai->l_ma}}</th>
            <th>{{$loai->l_ten}}</th>
            <th>
                    <a href="{{route('loai.edit',['id' =>$loai->l_ma])}}">Sửa</a>
                    <form method="post" action='{{route('loai.destroy',['id' =>$loai->l_ma])}}'>
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

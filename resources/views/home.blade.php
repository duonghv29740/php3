<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Path information</h1>
    <p>Id: {{$userId}}</p>
    <p>Username: {{$userName}}</p>
    <p>Name: {{$request['name']}}</p>
    <p>Class: {{$request['class']}}</p>
    <p>Infor: {{$request['infor']}}</p>

    <hr>
    <h1>People Infor</h1>

    <table class="table table-hover">
        <thead>
            <th>Tên</th>
            <th>Chiều cao</th>
            <th>Cân nặng</th>
            <th>Tuổi</th>
            <th>Giới tính</th>
            <th>Ảnh đại diện</th>
        </thead>
        <tbody>
           @foreach ($people as $p)
               <tr>
                   <td>{{$p['name']}}</td>
                   <td>{{$p['height']}}</td>
                   <td>{{$p['weight']}}</td>
                   <td>{{$p['age']}}</td>
                   <td>{{$p['gender']}}</td>
                   <td><img src="{{$p['avatar']}}" width="200" alt=""></td>
               </tr>
           @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
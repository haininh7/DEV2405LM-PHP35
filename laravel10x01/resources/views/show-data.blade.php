<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Truyền dữ liệu từ controller ra view</title>
</head>
<body>
    <h1>truyền dữ liệu từ controller ra view</h1>
    <pre>
        - hiển thị dữ liệu truyền từ action (showData) [AccountController]
    </pre>
    <hr>
    {{$message}}
    <hr>
     @foreach ($data as $item)
     <li>{{$item}}</li>
     @endforeach
</body>
</html>
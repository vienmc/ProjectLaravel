<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div><h1 style="color: orange;text-align: center">Error page!</h1>
    @if($msg)
        <h2 style="color: red;text-align: center">{{$msg}}</h2>
        {{$msg=''}}
    @endif
    <a href="/" style="text-align: center;position: relative;left: 47%"><button style="background: #00A8B3;font-size: 15px;width: 100px;height:50px;border-radius: 5px; color: black">Go to home</button></a>
    </div>
</body>
</html>

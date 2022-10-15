<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <h5 class="display-3">Welcome Home {{$name}}</h5>
    <p class="text-success">Age is {{$age}}</p>
    @foreach ($users as $user)
       <p class="text-primary">{{$user}}</p>
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  hello index.blade.php  :))

  {{-- 方法一 --}}
  <br>
  {{-- <a href="/bikes/create">create btn</a> --}}
  <br>
  {{-- <a href="/bikes/123/edit">edit btn</a> --}}
  
  {{-- 方法二 --}}
  {{-- laravel helper route name --}}
  <br>
  <a href="{{route('bikes.create')}}">create btn</a>
  <br>
  <a href="{{route('bikes.edit', ['bike' => 1 ,'test' => 123])}}">edit btn</a>

  <br>
  <a href="{{route('student')}}">student btn</a>

</body>
</html>
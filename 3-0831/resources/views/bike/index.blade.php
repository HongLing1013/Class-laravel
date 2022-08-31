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
  <br>
  {{-- 單純echo --}}
  {{$data['v1']}}
  <br>
  {{$data['v2']}}


  <br>
  @php
  // dd($data);
  // var_dump($data);
  // echo ($data['myArr']); 會出現錯誤訊息 所以得用foreach才行
  // foreach ($data['myArr'] as $key => $value){
  //   echo("$key=>$value<br>");
  // }
  @endphp

  {{-- 這個@foreach等同上方foreach --}}
  @foreach ($data['myArr'] as $key => $value)
    {{-- 內放字串 (可放html) --}}
    <a href="http://">{{$value}}</a>
  @endforeach


</body>
</html>
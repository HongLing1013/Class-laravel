<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  {{-- 方法一 --}}  
  {{-- <link rel="stylesheet" href="/css/style.css"> --}}
  {{-- 方法二 --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  

  {{-- <style>
    h2{
        color:red;
    }
  </style> --}}
</head>
<body>
  @php
    // dd($data)   ;
  @endphp

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>    
  <a href="{{route('students.create')}}" class="btn btn-success" role="button">add</a>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
        <th>edit/del</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->chinese}}</td>
        <td>{{$item->english}}</td>
        <td>{{$item->math}}</td>
        <td>
          <div>
            {{-- <a href="{{route('students.create')}}" class="btn btn-danger" role="button">del</a> --}}
            <form action="{{route('students.destroy',['student' => $item->id])}}" method="post">
              <a href="{{route('students.edit',['student' => $item->id])}}" class="btn btn-warning" role="button">edit</a>
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="del">
            </form>
          </div>
        </td>
      </tr>    
      @endforeach
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
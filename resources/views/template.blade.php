<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-header />
@include('profile')

      <h1>hello template</h1>
      <h3>{{$data['name']}}</h3>
      @for($i=0; $i<=10; $i++)
      <h6>the curent loop values is:{{$i}}</h6>
      @endfor
    <!--
     <form action="" method="post">
    @method('PUT')
    @csrf
    --->
</body>
</html>

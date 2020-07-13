<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Layout_page</title>

    <style>
        .header{
            color:blue;
            background-color:darkturquoise;
        }
        .sidebar{
            font-size: 40px;
            background:deepskyblue;
            margin: 20px;
        }
        .contaner{
            font-size: 40px;
            background:firebrick;

        }
    </style>
</head>
<body>
    <div class="header">
        @section('header')
          <h2>header section</h2>
        @show
    </div>

    <div class="sidebar">
        @section('sidebar')
         <p>sidebar page section</p>
         @show
    </div>
    <div class="contaner">
        @yield('content')
    </div>
</body>
</html>

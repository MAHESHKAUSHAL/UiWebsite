<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUBMIT FORM</title>
</head>
<body>
    <!--
    <div>
        <ul>
            @foreach($errors->all() as $e)
                <li>{{$e}}</li>
            @endforeach
        </ul>
    </div>
------->


    <form action="user_forms"method="post">
        @csrf
        <input type="text" placeholder="name" name="name">
        @error('name')
        <div>{{$message}}</div>
        @enderror
        <br>
        <input type="text" placeholder="phone" name="phone">
        @error('phone')
        <div>{{$message}}</div>
        @enderror
        <br>
        <input type="password" placeholder="password" name="password">
        @error('password')
        <div>{{$message}}</div>
        @enderror
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

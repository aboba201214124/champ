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
<form action="{{route('register')}}" method="post">
    @csrf
    <label for="">Имя</label>
    <input type="text" name="name" value="">
    <label for="">email</label>
    <input type="text" name="email" value="">
    <label for="">Пароль</label>
    <input type="text" name="password" value="">
    <button type="submit">отправить</button>
</form>
</body>
</html>

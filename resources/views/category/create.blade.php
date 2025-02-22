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
    <h1>Создать категорию</h1>
    <a href="{{route('category.index')}}">Вернуться</a>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="name">Название</label>
        <input type="text" id="name" name="name" placeholder="название">
        <button type="submit">Создать</button>
    </form>
</body>
</html>

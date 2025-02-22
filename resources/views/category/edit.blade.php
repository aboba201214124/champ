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
<h1>Изменить категорию</h1>
<a href="{{route('category.index')}}">Вернуться</a>
    <form action="{{route('category.update', $category->id)}}" method="post">
        @csrf
        @method('patch')
        <label for="">Наименование</label>
        <input type="text" name="name" placeholder="Наименование" id="name" value="{{$category->name}}">
        <input type="submit" value="Изменить">
    </form>
</body>
</html>

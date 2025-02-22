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
<h1>Категории</h1>
<a href='{{route('category.create')}}'>Добавить</a>
<a href="{{route('auth.index')}}">Вернуться</a>
<table>
    <tr>
        <td>№</td>
        <td>Наименование</td>
    </tr>
    @foreach($category as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td><a href="{{route('category.show', $item->id)}}">{{ $item->name }}</a></td>
            <td><a href="{{route('category.edit', $item->id)}}">Изменить</a></td>
            <td>
                <form action="{{route('category.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>

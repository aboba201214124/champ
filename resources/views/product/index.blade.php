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
<h1>Товары</h1>
<a href='{{route('product.create')}}' >Добавить</a>
<a href="{{route('auth.index')}}">Вернуться</a>
<form>
    <select name="category_id" id="">
        <option value="all">Все</option>
        @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <button type="submit">Отфильтровать</button>
</form>
<table>
    <tr>
        <td>№</td>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Категория</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><a href="{{route('product.show', $product->id)}}">{{ $product->name }}</a></td>
            <td>{{ $product->price }}</td>
            <td>{{$product->category->name}}</td>
            <td><a href="{{route('product.edit', $product->id)}}">Изменить</a></td>
            <td>
                <form action="{{route('product.destroy', $product->id)}}" method="post">
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

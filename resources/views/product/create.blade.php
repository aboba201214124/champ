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
<form action="{{route('product.store')}}" method="post">
    @csrf
    <label for="name">Название</label>
    <input type="text" id="name" name="name" placeholder="название">
    <label for="price">Цена</label>
    <input type="text" id="price" name="price" placeholder="цена">
    <select name="category_id" id="">
        @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <button type="submit">Создать</button>
</form>
</body>
</html>

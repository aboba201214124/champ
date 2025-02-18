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
<form action="{{route('product.update',$product->id) }}" method="post">
    @csrf
    @method('patch')
    <label for="">Наименование</label>
    <input type="text" name="name" id="name" placeholder="name" value="{{$product->name}}">
    <label for="">Цена</label>
    <input type="text" name="price" id="price" placeholder="price" value="{{$product->price}}">
    <select name="category_id" id="">
        @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <button type="submit">Изменить</button>
</form>
</body>
</html>

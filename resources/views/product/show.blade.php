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
<div>
    <div>{{$product->id}}. {{$product->name}}</div>
    <div>{{$product->price}} рублей</div>
    <td>Категория:{{$product->category->name}}</td>
    <a href="{{route("product.index")}}">Вернуться</a>
</div>
</body>
</html>

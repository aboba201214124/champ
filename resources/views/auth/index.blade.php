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
    @auth
    <a href='{{route('category.index')}}'>Категории</a>
    <a href='{{route('product.index')}}'>Товары</a>
    <a href="{{route('logout')}}">Выйти</a>
    @else
    <a href='{{route('auth.login')}}' >Войти</a>
    <a href='{{route('auth.reg')}}' >Зарегистрироваться</a>
    @endauth
    @foreach($products as $product)
        <h2>{{$product->name}}</h2>
        <p>{{$product->price}}</p>
    @endforeach
</body>
</html>

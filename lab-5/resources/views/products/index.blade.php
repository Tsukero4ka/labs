<!DOCTYPE html>
<html>
<head>
    <title>Список продуктів</title>
</head>
<body>
    <header>
        <h1>Список продуктів</h1>
        <div><a href="{{ route('products.create') }}">Додати продукт</a></div>
    </header>
    @if ($products->isEmpty())
        <p>Немає доступних продуктів.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    <h3>{{ $product->name }}</h3>
                    <p>Ціна: ${{ $product->price }}</p>
                    <p>{{ $product->description }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Створення продукта</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="block">
        <h2>Створення продукта</h2>
        
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="field">
                <label for="name">Назва:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="field">
                <label for="price">Ціна:</label>
                <input type="number" name="price" id="price" required>
            </div>
            <div class="field">
                <label for="description">Опис:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <button type="submit">Зберегти</button>
            <button type="button" onclick="window.history.back()">Назад</button>
        </form>
    </div>
</body>
</html>

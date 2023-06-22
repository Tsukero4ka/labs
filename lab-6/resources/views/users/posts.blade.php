<!DOCTYPE html>
<html>
<head>
    <title>Пости користувача {{ $user->name }}</title>
</head>
<body>
    <h1>Пости користувача {{ $user->name }}</h1>
    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>На жаль, у цього користувача немає жодних постів.</p>
    @endif
</body>
</html>
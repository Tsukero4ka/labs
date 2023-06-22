<!DOCTYPE html>
<html>
<head>
    <title>Список користувачів</title>
</head>
<body>
    <h1>Список користувачів</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <strong><a href="{{ route('users.posts', ['user' => $user->id]) }}">{{ $user->name }}</a></strong>
                <ul>
                    @foreach ($user->roles as $role)
                        <li>{{ $role->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>

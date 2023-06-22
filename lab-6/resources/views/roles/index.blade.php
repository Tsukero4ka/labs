<!-- resources/views/roles/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Список ролей</title>
</head>
<body>
    <h1>Список ролей</h1>
    <ul>
        @foreach ($roles as $role)
            <li>
                <strong>{{ $role->name }}</strong>
                <ul>
                    @foreach ($role->users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>

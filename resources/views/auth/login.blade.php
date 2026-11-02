<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 50px;">
    <h2>Login Sistem Perpustakaan</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit" style="padding: 5px 15px;">Login</button>
    </form>
</body>
</html>
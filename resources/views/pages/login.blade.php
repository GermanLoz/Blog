<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('static/css/login.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>Login Blog</title>
</head>
<body>
    <div class="container-login">
        <h1>Login</h1>
        <form method="POST" class="form-grid" action="{{route('login')}}">
            @csrf
            <input type="email" class="input-default" placeholder="Email" id="email" name="email"/>
                @error('email')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            <input type="password" class="input-default" placeholder="Password" id="password" name="password"/>
                @error('password')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            <input type="submit"class="button-login" value="login"/>
        </form>
    </div>
</body>
</html>
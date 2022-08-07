<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('static/css/backend.css') }}"/>
    <title>admin</title>
</head>
<body>

    <div class="nav">
        <ul>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Cerrar sesion</p>
                </a>
            </li>
            <li>
                <a href="{{route('create-post')}}">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Create post</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin-users')}}">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a href="{{route('landing')}}">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Content Landing</p>
                </a>
            </li>
        
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>German BLOG</title>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&display=swap" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('static/css/app.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Montserrat:wght@100;200;300;400;500;600&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
    
    </head>
<body>
    <div class="container-nav-bar">
        <header>
            <nav class="nav-bar">
                <ul class="nav-bar-ul">
                    <li class="nav-bar-ul-li">
                        <a class="nav-link" href={{route('home')}}>Home</a>
                    </li>
                    <li class="nav-bar-ul-li">
                        <a class="nav-link" href={{route('programing')}}>Programacion</a>
                    </li>
                    <li class="nav-bar-ul-li">
                        <a class="nav-link" href={{route('physics')}}>Fisica</a>
                    </li>
                    <li class="nav-bar-ul-li">
                        <a class="nav-link" href={{route('summaries')}}>Resumenes de libros</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
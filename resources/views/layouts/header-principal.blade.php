<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/mystyles.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        
        <nav class="nav">
            <div class="nav-1">
                <a href="/"><i class="fa fa-home"></i></a>
            </div>
            <div class="nav-2">
                <a class="active" href="/">Home</a>
                <a href="{{route("catalogo")}}">Catálogo</a>
                <a href="#blog">Blog</a>
                <a href="#contacta">Contact</a>
                <div class="search-container">
                    <form class="barra-busqueda" action="/action_page.php">
                      <input type="text" placeholder="Search.." name="search">
                      <button style="margin-left: 10px; color:white;" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="nav-3">
                @if (Auth::check())
                    <a href="{{route("cesta")}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></a>
                @endif
                @if (!Auth::check())
                    <a href="{{route("login")}}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                @endif
                @if (Auth::check())
                    <a href="{{route("logout")}}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                @endif
                @if (!Auth::check())
                <a href="{{route("register")}}">Registar</a>
            @endif
            </div>       
        </nav>
        
    </header>

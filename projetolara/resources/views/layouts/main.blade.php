<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collaps navbar-collapse" id="id">
               <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="">
               </a>
               <ul class="navbar-nav">
                <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                <li class="nav-item"><a href="/events/create" class="nav-link">Criar Eventos</a></li>
                <li class="nav-item"><a href="" class="nav-link">Entrar</a></li>
                <li class="nav-item"><a href="" class="nav-link">Cadastrar</a></li>
               </ul>
            </div>
        </nav>
    </header>


  <main>
    <div class="container-fluid">
        <div class="row">

            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </div>
  </main>
    <footer>
        <p>HDC Events &copy; 2022</p>
    </footer>

    </body>
</html>

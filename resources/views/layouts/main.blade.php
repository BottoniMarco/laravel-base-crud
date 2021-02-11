<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            @yield('header')
        </header>
        
        <main class="container">
         @yield('content')
        </main>

        <footer>
            @yield('footer')
        </footer>
    </div>

</body>
</html>
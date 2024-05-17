<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header class="container-fluid position-sticky top-0 bg-success">
        @include('layout.components.header')
    </header>

    <main class="container my-5">
        @yield('content')
    </main>
    
    <footer class="container-fluid mt-5 p-4 bg-dark position-fixed bottom-0">
        @include('layout.components.footer')
    </footer>
    
</body>
</html>
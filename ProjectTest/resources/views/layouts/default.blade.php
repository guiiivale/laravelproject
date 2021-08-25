<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First laravel project</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
</head>
<body class="bg-gray-100">
    <header>
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold text-center">Laravel Todos</h1>
        </div>
    </header>
    <main class="p-4">
    @yield('content')
    </main>
</body>
</html>
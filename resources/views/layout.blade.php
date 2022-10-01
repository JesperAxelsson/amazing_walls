<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')

    @stack('scripts')

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-amber-600">
    <div class="flex w-screen justify-center">
        <div class="w-5/6 flex flex-col h-screen justify-between align-center">

            <header class=" m-5 shadow">
                <div class="bg-gray-800 rounded p-3">
                    <a href="/">
                        <h1 class="indent-8 text-amber-700 font-bold text-5xl w-fit">Amazing Walls!</h1>
                    </a>
                </div>
            </header>

            <main class="flex-1 mx-5">
                @yield('content')
            </main>

            <footer
                class="h-10 mx-5 mt-5 text-l rounded shadow md:flex md:items-center md:justify-between p-5 bg-gray-800">
                <p>
                    © Copyright 2022
                </p>
            </footer>
        </div>
    </div>
</body>

</html>
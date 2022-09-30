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

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-amber-600">
    <div class="  flex w-screen justify-center">
        <div class="w-5/6 flex flex-col h-screen justify-between align-center">

            <header class="h-10 mx-5 shadow">
                <div class="bg-gray-800 rounded p-3">
                    <h1 class="indent-8 text-amber-800 font-bold text-3xl ">Amazing Walls!</h1>
                </div>
            </header>

            <main class="h-100 mb-5 mx-5">
                @yield('content')
            </main>

            <footer
                class="h-10 mx-5 rounded p-4 bg-white shadow md:flex md:items-center md:justify-between md:p-6 bg-gray-800">
                Footsie stuff
            </footer>
        </div>
    </div>
</body>

</html>
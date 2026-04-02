<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('dilekhaliyikama.firma_adi') }} | Dünyanın En İyi Temizliği</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased overflow-x-hidden">

    @include('partials.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    </body>
</html>

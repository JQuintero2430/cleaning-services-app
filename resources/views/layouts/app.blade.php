<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: J. Quintero. Landing page Cleaning Services">
    <title>@yield('title','Cleaning Services')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <header>
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- end navbar --}}
    </header>
    <main class="flex-grow">
    <div class="text-center">
            <h1 class="text-3xl font-bold text-center text-slate-300">@yield('cabecera','Cleaning Services')</h1>
        </div>
    @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8">
    @include('layouts.footer')
    </footer>

    @yield('scripts')
</body>
</html>
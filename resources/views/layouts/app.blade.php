<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Cleaning Services')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <header>
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- end navbar --}}
    </header>
    <main class="flex-grow container mx-auto px-4 py-8">
    @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8">
    @include('layouts.footer')
    </footer>

    @yield('scripts')
</body>
</html>
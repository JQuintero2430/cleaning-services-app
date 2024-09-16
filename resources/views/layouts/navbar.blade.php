<nav class="bg-gray-800 p-4 flex justify-between items-center">
    <!-- Dropdown Menu -->
    <div class="relative">
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">Menu</button>
        <div class="absolute hidden bg-white text-black mt-2 py-2 w-48 rounded shadow-lg">
            <a href="./" class="block px-4 py-2 hover:bg-gray-200">Home</a>
            <a href="/products" class="block px-4 py-2 hover:bg-gray-200">Productos</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Servicios</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">¿Quienes Somos?</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Contactanos</a>
        </div>
    </div>

    <!-- Search Form -->
    <form action="/search" method="get" class="flex items-center">
        <input type="text" placeholder="Buscar..." name="q" class="px-4 py-2 rounded-l bg-white focus:outline-none focus:bg-white" />
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">Buscar</button>
    </form>

    <!-- Login Link -->
    <a href="/" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600 focus:outline-none">Login</a>
</nav>

<script>
    // JavaScript to toggle dropdown menu visibility
    document.querySelector('.relative button').addEventListener('click', function() {
        document.querySelector('.relative .absolute').classList.toggle('hidden');
    });
</script>
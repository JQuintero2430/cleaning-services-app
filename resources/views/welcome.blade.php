 @extends('layouts.app')

  @section('title', 'Productos')

    @section('content')
    <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Productos</h1>
    <p class="text-lg mb-6">En esta sección encontrarás los productos que tenemos disponibles</p>

    <ul class="space-y-4">
        @foreach($products as $product)
            <li class="p-4 bg-gray-100 rounded shadow-md">
                <span class="font-semibold">{{ $product->name }}</span> - 
                <span>Precio: ${{ $product->price }}</span> - 
                <span>Stock: {{ $product->stock }}</span>
            </li>
        @endforeach
    </ul>
</div>
    @endsection
    @section('scripts')
    <script src="{{ mix('resources/js/dropdown.js') }}"></script>
    @endsection
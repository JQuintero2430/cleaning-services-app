@extends('layouts.app')

@section('title', 'Nuestros Productos')

@section('content')

<div class="container mx-auto px-4 py-8">
    @section('cabecera', 'Nuestros Productos')
    <div class="flex justify-end my-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar Producto</a>
    </div>
</div>
<div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my:4">
    @foreach($products as $product)
    <div class="card bg-base-100 w-80 shadow-xl">
        <figure>
            <img
                src="https://picsum.photos/id/{{ $product->id }}/300/300"
                alt="{{ $product->name }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ $product->name }}</h2>
            <p class="text-slate-300"> ${{ $product->price }}</p>
            <p>{{ Str::limit($product->description , 60) }} </p>
            <div class="card-actions justify-end flex space-x-2">
                <a href=" {{ route('products.edit', $product->id) }}" class="btn btn-outline btn-accent btn-xs ">Editar</a>
                <form action=" {{ route('products.destroy', $product->id) }}" method='POST' class="flex items-center" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-error btn-xs">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    </ul>
</div>
@endsection

@section('scripts')
<script src="{{ mix('resources/js/dropdown.js') }}"></script>
@endsection
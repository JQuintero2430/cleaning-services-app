@extends('layouts.app')

@section('title', 'Agregar Producto')
@section('cabecera', 'Agregar Producto')

@section('content')
<div class="flex justify-center my-6">
    <div class="card bg-base-100 w-96 shadow-2xl">
        <form class="card-body" action="{{ route('products.store') }}" method="POST">
            @csrf
            {{-- Nombre --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Nombre</span>
                </label>
                <input type="text" name="name" placeholder="Nombre del producto" class="input input-bordered" required />
            </div>
            {{-- Descripción --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Descripción</span>
                </label>
                <input type="text" name="description" placeholder="Descripción" class="input input-bordered" />
            </div>
            {{-- Precio --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Precio</span>
                </label>
                <input type="number" name="price" placeholder="Precio" class="input input-bordered" required />
            </div>
            {{-- Categoría --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Categoría</span>
                </label>
                <select name="category_id" id="category_id" class="input input-bordered" required>
                    <option value="1" selected>Default Category</option>
                    <!-- Otras opciones de categorías -->
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                </select>
            </div>
            {{-- Unidad de Medida --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Unidad de medida</span>
                </label>
                <select name="unit_of_measurement" id="unit_of_measurement" class="input input-bordered" required>
                    <option value="1" selected>Kilogramos</option>
                    <!-- Otras opciones de categorías -->
                    <option value="2">Libras</option>
                    <option value="3">Litros</option>
                </select>
            </div>
            {{-- Stock --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Stock</span>
                </label>
                <input type="number" name="stock" placeholder="Stock" class="input input-bordered" required />
            </div>
            {{-- botones --}}
            <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary">Crear producto</button>
                <a href="{{ route('products.index')}}" class="btn btn-outline mt-4">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
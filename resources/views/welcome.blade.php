@extends('layouts.app')

@section('title', 'Cleaning Services Home')

@section('content')
<div class="hero min-h-screen">
    <div class="hero-overlay bg-opacity-40"></div>
    <div class="hero-content text-neutral-content text-center">
        <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold" style="color:azure">Bienvenido a Cleaning Services</h1>
            <p class="mb-5" style="color:azure">
                Bienvenido a nuestro sitio web de servicios de limpieza. Si deseas conocer todos nuestro productos te invitamos a que hacer clic en el boton de abajo.
            </p>
            <a href="/products" class="btn btn-primary">Empecemos con el Viaje</a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('resources/js/dropdown.js') }}"></script>
@endsection
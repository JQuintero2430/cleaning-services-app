@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de elementos</h1>
        <ul>
            @foreach($items as $item)
                <li>
                    {{ $item->name }}
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        function confirmDelete() {
            return confirm('¿Estás seguro de que deseas eliminar este elemento?');
        }
    </script>
@endsection
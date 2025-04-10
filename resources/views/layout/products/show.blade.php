@extends('layout.app')

@section('title', 'Detalle del Producto')

@section('content')
    <h1>Detalle del Producto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
            <p class="card-text"><small class="text-muted">Creado: {{ $product->created_at->format('d/m/Y H:i') }}</small></p>
            <p class="card-text"><small class="text-muted">Actualizado: {{ $product->updated_at->format('d/m/Y H:i') }}</small></p>

            <div class="mt-3">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection

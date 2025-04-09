@@extends('layout.app')


@section('content')
    <h1>Productos
        <ul>
            @foreach ($products as $product)
                <li>
                    {{-- <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> --}}
                    <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                </li>
            @endforeach
        </ul>

    </h1>

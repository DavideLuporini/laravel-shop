@extends('layouts.main')

@section('content')
<ul>
    @foreach ($products as $product)
    <li>
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <div>{{ $product->price }}</div>
        <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
        <a class="d-block" href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
    </li>
    @endforeach
</ul>
@endsection
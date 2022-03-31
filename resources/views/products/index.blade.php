@extends('layouts.main')

@section('content')

<a href="{{ route('products.create') }}">Aggiungi prodotto</a>

<ul>
    @foreach ($products as $product)
    <li>
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <div>{{ $product->price }}</div>
        <div class="badge rounded-pill text-black" style="background-color:{{ $product->brand->color }};">Brand: {{ $product->brand->name }}</div>
        <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
        <a class="d-block" href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
        @include('includes.delete')
    </li>
    @endforeach
</ul>
@endsection
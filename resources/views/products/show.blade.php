@extends('layouts.main')

@section('content')
<div>
    <figure>
        <img src="{{ $product->image }}" alt="">
    </figure>
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <div>{{ $product->price }}</div>
    <a href="{{ route('products.index') }}">Home</a>
    <a class="d-block" href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
</div>
@endsection
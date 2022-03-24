{{-- <a class='text-red' href="{{ route('products.destroy', ['product' => $product->id]) }}">DELETE</a> --}}

<form action="{{route('products.destroy' , ['product' => $product->id]) }}" method="POST">

    <button type="submit">DELETE</button>
    @method('delete')
    @csrf
</form>
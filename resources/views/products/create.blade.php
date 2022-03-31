@extends('layouts.main')

@section('content')
<div class="text-center">
    <h2>Aggiungi il tuo prodotto</h2>
</div>

<div class="container">
    <div class="form-prodotti my-5">

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-8">
                    <label for="name">Nome</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="col-4">
                    <label for="color">Colore</label>
                    <div class="input-group mb-3">
                        <select name="color_id" id="color">
                            <option value="">Nessun colore</option>
                            @foreach($colors as $c)
                            <option value="{{ $c->name }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <label for="description">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" id="description" name="description"></textarea>
            </div>

            <label for="price">Prezzo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
            </div>

            <label for="image">Aggiungi url immagine</label>
            <div class="input-group mb-3">
                <input type="url" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
</div>


</div>
@endsection
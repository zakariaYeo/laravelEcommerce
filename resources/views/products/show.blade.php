@extends('layouts.master')
@section('title', 'Boutique')
@section('content')
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0">{{ $product->title }}</h3>
        <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y') }}</div>
        <p class="card-text mb-auto">{{ $product->description }}</p>
        <strong class="card-text mb-auto">{{ $product->getPrice() }}
        </strong>
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button class="btn btn-success mt-2">Ajouter au panier</button>
        </form>
    </div>
    <div class="col-auto d-none d-lg-block">
        <img src="{{ $product->image }}" alt="">
    </div>
</div>
@endsection

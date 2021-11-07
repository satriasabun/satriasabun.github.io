@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-4 mt-3">Detail Product Page</h1>
                <div class="card mb-2">
                <img src="https://source.unsplash.com/1200x400?{{ $product->category->name }}" class="card-img-top img-fluid" alt="{{ $product->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title fs-3">{{ $product->title }}</h5>
                        <p>By : <a href="/authors/{{ $product->author->username }}" class="text-decoration-none">{{ $product->author->name }}</a> in <a href="/category/{{ $product->category->slug}}" class="text-decoration-none">{{ $product->category->name  }}</a></p>
                        <p class="card-text">{{ $product->excerpt }}</p>
                        <article class="my-3 fs-5">
                            {!! $product->body !!}
                        </article>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="/checkout" class="btn btn-success">Buy</a>
                            <a href="/products" class="btn btn-primary">Back</a>
                            <a href="/cart" class="btn btn-danger">Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
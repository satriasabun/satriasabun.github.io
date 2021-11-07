@extends('layouts.main')

@section('container')
    <h1 class="mb-3 mt-5 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/products">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search . ." name="search" value="{{ request('search') }}">
                    <button class="btn btn-info" type="submit" id="name">Search</button>
                </div
            </form>
        </div>
    </div>
    @if ($products->count())
        <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $products[0]->category->name }}" class="card-img-top" alt="{{ $products[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/product/{{ $products[0]["slug"] }}" class="text-decoration-none text-dark">{{ $products[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">By : <a href="/authors/{{ $products[0]->author->username }}" class="text-decoration-none">{{ $products[0]->author->name }}</a> in <a href="/categories/{{ $products[0]->category->slug}}" class="text-decoration-none">{{ $products[0]->category->name  }}</a> {{ $products[0]->created_at->diffForHumans() }} </small>
                </p>
                <p class="card-text">{{ $products[0]->excerpt }}</p>
                <div class="d-flex justify-content-between">
                    <a href="/checkout" class="btn btn-success">Buy</a>
                    <a href="/product/{{ $products[0]->slug }}" class="btn btn-primary">Detail</a>
                    <a href="/cart" class="btn btn-danger">Cart</a>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="row">
        @foreach ( $products->skip(1) as $product )
            <div class="col-md-4 mb-3">
                <a href="/product/{{ $product->slug }}">
                    <div class="card mb-2" style="width: 20rem;">
                    <div class="position-absolute px-3 py-2 text-white rounded-end" style="background-color: rgba(0, 0, 0, 0.7);"><a href="categories/{{ $product->category->slug}}" class="text-decoration-none text-white">{{ $product->category->name }}</a></div>
                    <img src="https://source.unsplash.com/300x250?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p>
                                <small class="text-muted">By : <a href="/authors/{{ $product->author->username }}" class="text-decoration-none">{{ $product->author->name }}</a> {{ $product->created_at->diffForHumans() }} </small>
                            </p>
                            <p class="card-text">{{ $product->excerpt }}</p>
                            <a href="/checkout" class="btn btn-success">Buy</a>
                            <a href="/product/{{ $product->slug }}" class="btn btn-primary">Detail</a>
                            <a href="/cart" class="btn btn-danger">Cart</a>
                        </div>
                    </div>
                </a> 
            </div>
        @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4 display-4">No Product Found.</p>
    @endif
@endsection
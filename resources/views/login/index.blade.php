@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-5">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginErorr'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginErorr') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin kotak">
                <h1 class="h3 fw-normal text-center mb-3 mt-3 katuk">Please Login</h1>
                <form action="/login" method="post">
                @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control mb-1 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mb-1" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 mt-3" type="submit">
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <span class="front text">Login</span>
                    </button>
                </form>
                <small class="d-block text-center mt-3 text-white">Don't have any account? <a href="/register" class=" text-decoration-none now">Register Now!</a></small>
            </main>
        </div>
    </div>

@endsection
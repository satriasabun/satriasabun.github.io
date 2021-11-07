@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration kotak">
                <h1 class="h3 fw-normal text-center mb-3">Registration Form</h1>
                <form action="/register" method="post">
                @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control mb-1 @error ('name') is-invalid @enderror" id="name" placeholder="Enter Your Name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control mb-1 @error ('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control mb-1 @error ('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mb-1 @error ('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 mt-3" type="submit">
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <span class="front text">Register</span>
                    </button>
                </form>
                <small class="d-block text-center mt-3 text-white">Already have an Account? <a href="/login" class="text-decoration-none now">Login</a></small>
            </main>
        </div>
    </div>
@endsection
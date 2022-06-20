@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header border-0 border-light bg-white">
                <h6 class="m-0">Register new user</h6>
            </div>
            <form action="{{ route('auth.register') }}" method="POST" class="card-body">
                @csrf
                <div class="form-group mb-2">
                    <label for="name" class="form-label">Full name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="John Doe" value="{{ old('name') }}">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="johndoe@mail.com" value="{{ old('email') }}">

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Passw@rd1234">

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="password_confirmation" class="form-label">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Passw@rd1234">

                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3 text-center">
                    <button type="submit" class="btn btn-primary px-4">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
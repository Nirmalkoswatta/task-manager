@extends('layouts.guest')

@section('content')
<h2 class="auth-title">Register</h2>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
        @error('name')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
        @error('password')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        @error('password_confirmation')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('login') }}" class="btn btn-link">Already registered?</a>
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
@endsection
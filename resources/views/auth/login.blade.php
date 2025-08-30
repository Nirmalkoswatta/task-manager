@extends('layouts.guest')

@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus>
        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
        @error('password')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary">Log in</button>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="btn btn-link">Forgot your password?</a>
        @endif
    </div>
</form>
<div class="text-center mt-4">
    <span style="color:#000;font-weight:500;">Don't have an account? </span>
    <a href="{{ route('register') }}" style="color:#2563eb;font-weight:500;text-decoration:none;">Register</a>
</div>
@endsection
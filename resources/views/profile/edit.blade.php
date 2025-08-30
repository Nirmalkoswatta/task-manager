@extends('layouts.app')

@section('content')
<style>
    .profile-card {
        box-shadow: 0 2px 16px #0002;
        border-radius: 1rem;
        margin-bottom: 2rem;
    }

    .profile-card-header {
        font-size: 1.3rem;
        font-weight: 600;
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #eee;
        background: #f8f9fa;
    }

    .profile-card-body {
        padding: 2rem;
        background: #fff;
        border-radius: 0 0 1rem 1rem;
    }

    .profile-form label {
        font-weight: 500;
        color: #2563eb;
    }

    .profile-form input,
    .profile-form textarea {
        border-radius: 0.5rem;
        border: 1px solid #ddd;
        margin-bottom: 1rem;
    }

    .profile-form .btn-blue {
        background: #2563eb;
        color: #fff;
        font-weight: 600;
    }

    .profile-form .btn-green {
        background: #22c55e;
        color: #fff;
        font-weight: 600;
    }

    .profile-form .btn-red {
        background: #ef4444;
        color: #fff;
        font-weight: 600;
    }
</style>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="profile-card">
                <div class="profile-card-header">Profile Information</div>
                <div class="profile-card-body">
                    @include('profile.partials.update-profile-information-form', ['saveClass' => 'btn-blue'])
                </div>
            </div>
            <div class="profile-card">
                <div class="profile-card-header">Update Password</div>
                <div class="profile-card-body">
                    @include('profile.partials.update-password-form', ['saveClass' => 'btn-green'])
                </div>
            </div>
            <div class="profile-card">
                <div class="profile-card-header">Delete Account</div>
                <div class="profile-card-body">
                    @include('profile.partials.delete-user-form', ['saveClass' => 'btn-red'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; background: #f6f8fa; color: #222; }
        .main-nav { background: #fff; border-bottom: 1px solid #e5e7eb; }
        .main-nav .container { max-width: 1100px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1.5rem; }
        .main-nav .brand { font-weight: 600; font-size: 1.25rem; letter-spacing: 0.02em; color: #2563eb; }
        .main-nav .nav-links a { margin-left: 1.5rem; color: #374151; text-decoration: none; font-weight: 500; transition: color 0.2s; }
        .main-nav .nav-links a:hover { color: #2563eb; }
        .main-nav .user { color: #374151; font-weight: 500; }
        .main-content { max-width: 900px; margin: 2rem auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 8px #0001; padding: 2rem; }
    </style>
</head>
<body style="margin:0;padding:0;">
    <video autoplay muted loop id="bgvid" style="position:fixed;right:0;bottom:0;min-width:100vw;min-height:100vh;z-index:-1;object-fit:cover;">
        <source src="/background.mp4" type="video/mp4">
    </video>
    <nav class="main-nav" style="background:rgba(255,255,255,0.85);backdrop-filter:blur(4px);">
        <div class="container">
            <div class="brand">Task Manager</div>
            <div class="nav-links">
                @auth
                    <span class="user">{{ Auth::user()->name }}</span>
                    <a href="{{ route('tasks.index') }}">My Tasks</a>
                    <a href="{{ route('profile.edit') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" style="background:none;border:none;color:#2563eb;cursor:pointer;font-weight:500;margin-left:1.5rem;">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="main-content" style="background:rgba(255,255,255,0.92);backdrop-filter:blur(2px);box-shadow:0 2px 16px #0002;">
        @isset($header)
            <header style="margin-bottom:2rem;">
                <h2 style="font-size:1.5rem;font-weight:600;">{{ $header }}</h2>
            </header>
        @endisset
        {{ $slot ?? '' }}
    </div>
    <footer style="width:100vw;text-align:center;padding:1.5rem 0 0.5rem 0;color:#2563eb;font-weight:500;font-size:1rem;letter-spacing:0.01em;">
        Created by Nirmal Koswatta <span style="color:#e25555;font-size:1.2em;">❤️</span>
    </footer>
</body>
</html>

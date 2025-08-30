<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f6f8fa;
            color: #222;
        }

        .main-nav {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
        }

        .main-nav .container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem 1.5rem;
        }

        .main-nav .brand {
            font-weight: 600;
            font-size: 1.25rem;
            letter-spacing: 0.02em;
            color: #2563eb;
        }

        .main-nav .nav-links a {
            margin-left: 1.5rem;
            color: #374151;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .main-nav .nav-links a:hover {
            color: #2563eb;
        }

        .main-nav .user {
            color: #374151;
            font-weight: 500;
        }

        .main-content {
            max-width: 900px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px #0001;
            padding: 2rem;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <video autoplay muted loop id="bgvid" style="position:fixed;top:0;left:0;width:100vw;height:100vh;min-width:100vw;min-height:100vh;z-index:-1;object-fit:cover;">
        <source src="/background4.mp4" type="video/mp4">
    </video>
    <nav class="main-nav" style="background:rgba(255,255,255,0.85);backdrop-filter:blur(4px);">
        <div class="container" style="justify-content:flex-start;">
            <div class="brand" style="font-size:2.2rem;font-weight:800;letter-spacing:0.04em;margin-right:2.5rem;">Task Manager</div>
            <div class="nav-links" style="flex:1;display:flex;justify-content:flex-end;align-items:center;">
                @auth
                <span class="user" style="color:#FFD600;font-size:1.5rem;font-weight:700;margin-right:2rem;vertical-align:middle;">{{ Auth::user()->name }}</span>
                <a href="{{ route('tasks.index') }}">My Tasks</a>
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit" style="background:none;border:none;color:#ef4444;cursor:pointer;font-weight:700;margin-left:1.5rem;">Logout</button>
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
        @yield('content')
    </div>
    <footer style="width:100vw;text-align:center;padding:1.5rem 0 0.5rem 0;color:#2563eb;font-weight:500;font-size:1rem;letter-spacing:0.01em;">
        Created by Nirmal Koswatta <span style="color:#e25555;font-size:1.2em;">❤️</span>
    </footer>
</body>

</html>
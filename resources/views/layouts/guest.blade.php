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
        .auth-container { min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .auth-box { background: #fff; border-radius: 12px; box-shadow: 0 2px 8px #0001; padding: 2.5rem 2rem; width: 100%; max-width: 400px; }
        .auth-title { font-size: 1.5rem; font-weight: 600; margin-bottom: 1.5rem; color: #2563eb; text-align: center; }
    </style>
</head>
<body style="margin:0;padding:0;">
    <video autoplay muted loop id="bgvid" style="position:fixed;right:0;bottom:0;min-width:100vw;min-height:100vh;z-index:-1;object-fit:cover;">
        <source src="/background.mp4" type="video/mp4">
    </video>
    <div class="auth-container">
        <div class="auth-box" style="background:rgba(255,255,255,0.92);backdrop-filter:blur(2px);box-shadow:0 2px 16px #0002;">
            <div class="auth-title">Task Manager</div>
            {{ $slot }}
        </div>
    </div>
    <footer style="width:100vw;text-align:center;padding:1.5rem 0 0.5rem 0;color:#2563eb;font-weight:500;font-size:1rem;letter-spacing:0.01em;">
        Created by Nirmal Koswatta <span style="color:#e25555;font-size:1.2em;">❤️</span>
    </footer>
</body>
</html>

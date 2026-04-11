<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Edge Mind</title>
    <meta name="robots" content="noindex, nofollow">
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="admin-login-container">
        <div class="admin-login-card">
            <div style="text-align: center; margin-bottom: 2rem;">
                <span style="font-family: var(--font-primary); font-size: 1.25rem; font-weight: 700; color: var(--em-white);">Edge<span style="color: var(--em-accent);">Mind</span></span>
            </div>

            <h1>Admin Access</h1>
            <p class="login-subtitle">Restricted area. Authorized personnel only.</p>

            @if($errors->any())
                <div class="admin-alert admin-alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div style="margin-bottom: 1.25rem;">
                    <label class="input-label" for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" class="input-edge" required value="{{ old('email') }}" autofocus>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label class="input-label" for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" class="input-edge" required>
                </div>

                <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1.5rem;">
                    <input type="checkbox" name="remember" id="remember" style="accent-color: var(--em-accent);">
                    <label for="remember" style="font-size: 0.8rem; color: var(--em-slate);">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">ACCESS PANEL</button>
            </form>
        </div>
    </div>
</body>
</html>

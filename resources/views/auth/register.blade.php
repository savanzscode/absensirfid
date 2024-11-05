<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .register-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-link {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<div class="register-card bg-white">
    <h2 class="text-center mb-4">Register</h2>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter a password" required>
        </div>
        <div class="form-group">
            <label>Konfirmasi Password:</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4">Register</button>
    </form>

    <div class="login-link">
        <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
    </div>
</div>
</body>
</html>

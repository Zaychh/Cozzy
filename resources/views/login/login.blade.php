<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DE COZZY - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        .left-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            padding: 20px;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .brand-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .brand-logo {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }

        .brand-title {
            color: #28a745;
            font-weight: bold;
            font-size: 2rem;
            margin: 0;
        }

        .btn-login {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px;
            font-size: 1rem;
        }

        .btn-login:hover {
            background-color: #218838;
        }

        .register-link {
            margin-top: 10px;
            text-align: center;
        }

        .register-link a {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
        }

        .right-section {
            flex: 1;
            position: relative;
            background: url('{{ asset("storage/image/background.jpg") }}');
            background-size: cover;
        }

        /* Logo styling */
        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .logo-container img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    @if (session::has('success'))
        <span class="alert alert-success p-2">{{session::get('success')}}</span>
    @endif
    @if (session::has('fail'))
        <span class="alert alert-success p-2">{{session::get('fail')}}</span>
    @endif
    <div class="left-section">
        <div class="login-container">
            <div class="brand-container">
                <img src="{{ asset('storage/images/cozy.jpg') }}" class="brand-logo">
                <h1 class="brand-title">DE COZZY</h1>
            </div>
            <p class="text-muted text-center mb-4">Welcome Back</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @if ($errors->any())
                    <div>
                        <p style="color: red">{{ $errors->first() }}</p>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@domain.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-login">Log In</button>
                </div>
                <div class="register-link">
                    <p>Don't Have An Account? <a href="{{ route('register') }}">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Section: Image with Logo -->
    <div class="right-section">
        <div class="logo-container">
        </div>
    </div>
</body>
</html>
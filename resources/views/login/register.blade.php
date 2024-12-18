<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DE COZZY - register+</title>
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
    <div class="left-section">
        <div class="login-container">
            <div class="brand-container">
                <img src="{{ asset('storage/images/cozy.jpg') }}" class="brand-logo">
                <h1 class="brand-title">DE COZZY</h1>
            </div>
            <p class="text-muted text-center mb-4">Register</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{old('nama')}}" class="form-control">
                    @error('nama')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}"  class="form-control">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-grid">
                    <form method="POST" class="row g-3" action="{{route('login')}}"></form>
                    @csrf
                    <button type="submit" class="btn btn-login">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

    <div class="right-section">
        <div class="logo-container">
        </div>
    </div>
</body>
</html>
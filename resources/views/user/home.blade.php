<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage - DeCozzy</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    @extends('layouts.app')

    @section('content')
    <div class="container-fluid">
        <!-- Header -->
        <div class="row bg-white py-3 px-4">
            <div class="col-6">
                <h3 class="fw-bold text-success">DE COZZY</h3>
            </div>
            <div class="col-6 text-end">
                <span class="fw-bold">Unknown</span>
                <small class="text-muted">Unknown User</small>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-light py-3">
                <nav class="nav flex-column">
                    <a href="#" class="nav-link text-success">Menu</a>
                    <a href="#" class="nav-link text-dark">Table Service</a>
                    <a href="#" class="nav-link text-dark">About Us</a>
                    <a href="{{route('login')}}" class="nav-link text-dark">Accounting</a>
                    <a href="#" class="nav-link text-dark">Setting</a>
                </nav>
            </div>

            <!-- Menu Items -->
            <div class="col-md-7 py-3">
                <div class="d-flex justify-content-between mb-3">
                    <input type="search" class="form-control w-75" placeholder="Search...">
                </div>
                <div class="row row-cols-3 g-4">
                    @foreach ($menuItems as $item)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('public/'.$item['images']) }}" class="card-img-top img-fluid mx-auto d-block" alt="{{ $item['name'] }}"
                                style="width: 100%; height: 180px; object-fit: cover;">
                            <div class="card-body d-flex flex-column text-center">
                                <h3 class="card-title small-text">{{ $item['name'] }}</h3>
                                <p class="card-text text-success fw-bold mt-auto adjustable-text">Rp{{ number_format($item['price'], 0, ',', '.') }}</p>
                                <button class="btn btn-outline-success mt-2 adjustable-text">Add to Dish</button>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-md-3 py-3 bg-white d-flex flex-column">
                <h5>Order Summary</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>ayam geprek sambal matah</span>
                        <span>Rp.15,000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Es Teh Lemon</span>
                        <span>Rp.4,000</span>
                    </li>
                </ul>
                <div>
                    <p class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rp.19,000</span>
                    </p>
                    <p class="d-flex justify-content-between">
                        <span>Tax (10%)</span>
                        <span>Rp.1,900</span>
                    </p>
                    <h5 class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>Rp.20,900</strong>
                    </h5>
                </div>

                <div class="d-flex justify-content-between gap-2 mt-3">
                    <div class="text-center">
                        <button class="btn btn-outline-secondary flex-fill d-flex flex-column align-items-center">
                            <i class="fa-solid fa-money-bill-wave fa-2x mb-2"></i>
                        </button>
                        <span style="color: black; display: block;">Cash</span>
                    </div>

                    <div class="text-center d-grid gap-2">
                        <button class="btn btn-outline-secondary flex-fill d-flex flex-column align-items-center">
                            <i class="fa-solid fa-credit-card fa-2x mb-2"></i>
                        </button>
                        <span class="color: black;">Credit/Debit Card</span>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-outline-secondary flex-fill d-flex flex-column align-items-center">
                            <i class="fa-solid fa-qrcode fa-2x mb-2"></i>
                        </button>
                        <span class="color: black;">QR Code</span>
                    </div>
                </div>

                <button class="btn btn-success w-100 mt-3">Pesan Sekarang</button>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>
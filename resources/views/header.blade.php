<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <title>Alphafish</title>
</head>
<body class="">
    <nav class="py-3 navbar navbar-expand-lg navbar-light" style="background-color: #F3F4F6">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo/navbar-logo.png') }}" alt="" style="height: 52px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/explore">Explore</a>
                    @if(Auth::user())
                        @if (Auth::user()->name == 'admin')
                            <a class="nav-link" href="{{route('foods.index')}}">Menu</a>
                            <a class="nav-link" href="{{route('restaurants.index')}}">Restaurants</a>
                        @else
                            <a class="nav-link" href="/orders/create">Booking</a>
                        @endif
                    @else
                        <a class="nav-link" href="/orders/create">Booking</a>
                    @endif
                    
                    @if (Auth::user())
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="/login">
                            <button type="button" class="mx-1 px-4 btn btn btn-outline-dark rounded-pill">Masuk</button>
                        </a>
                        <a href="/register">
                            <button type="button" class="mx-1 px-4 btn btn btn-outline-dark rounded-pill">Daftar</button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
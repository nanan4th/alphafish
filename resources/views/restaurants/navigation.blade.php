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
<body class="bg-light">
    <nav class="py-3 navbar navbar-expand-lg navbar-light" style="background-color: #F3F4F6">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo/navbar-logo.png') }}" alt="" height="52px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                    <a class="nav-link" href="{{ URL::to('restaurants') }}">Restaurants</a>
                    <a class="nav-link" href="{{route('restaurants.create')}}">Add Restaurant</a>
                </div>
            </div>
        </div>
    </nav>
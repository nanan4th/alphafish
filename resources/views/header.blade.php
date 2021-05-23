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
            <a class="navbar-brand" href="/">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#">Explore</a>
                    <a class="nav-link" href="#">Booking</a>
                    <a href="/login">
                        <button type="button" class="mx-1 px-4 btn btn btn-outline-dark rounded-pill">Masuk</button>
                    </a>
                    <a href="/register">
                        <button type="button" class="mx-1 px-4 btn btn btn-outline-dark rounded-pill">Daftar</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
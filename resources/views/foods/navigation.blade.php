<!DOCTYPE html>
<html>

<head>
    <title>Food Section</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Alphafish</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ URL::to('foods') }}">Menu</a></li>
                <li><a href="{{route('foods.create')}}">Add Food</a>
            </ul>
        </nav>
<!DOCTYPE html>
<html>

<head>
    <title>Restaurant Section</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Alphafish</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Restaurants</a></li>
                <li><a href="#">Add Restaurant</a>
            </ul>
        </nav>

        <h1>Booking</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('orders.store')}}" method="post">
            @csrf

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Restaurant:</strong>
                <input type="text" name="restaurant" class="form-control" placeholder="Restaurant">
            </div>

            <div class="form-group">
                <strong>Dates:</strong>
                <input type="date" name="dates" class="form-control">
            </div>

            <div class="form-group">
                <strong>Hour:</strong>
                <input type="number" name="hour" class="form-control" placeholder="Hour">
            </div>

            <div class="form-group">
                <strong>Number of People:</strong>
                <input type="number" name="numberOfPeople" class="form-control" placeholder="Number of People">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>
</body>

</html>
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
                <a class="navbar-brand" href="{{route('restaurants.index')}}">Restaurant Section</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('restaurants.index')}}">View Restaurants</a></li>
                <li><a href="{{route('restaurants.create')}}">Add Restaurant</a>
            </ul>
        </nav>

        <h1>Add food</h1>

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
        <form action="{{route('restaurants.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:50px" name="desc" placeholder="Description"></textarea>
            </div>

            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>
</body>

</html>
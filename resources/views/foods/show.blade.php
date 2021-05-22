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
                <a class="navbar-brand" href="{{route('foods.index')}}">Food Section</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('foods') }}">View Menu</a></li>
                <li><a href="{{route('foods.create')}}">Add Food</a>
            </ul>
        </nav>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show food</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('foods.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <h1>{{ $foods->name }}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $foods->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $foods->price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    {{ $foods->category }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $foods->desc }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="{{asset('image/foods/')}}/{{$foods->image}}" width="500px" alt="">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
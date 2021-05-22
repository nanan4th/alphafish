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

        <h1>All the restaurants</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @endif

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Description</td>
                    <td>Image</td>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->address }}</td>
                    <td>{{ $value->desc }}</td>
                    <td><img src="{{asset('image/restaurants/')}}/{{$value->image}}" alt="" style="max-width:50px;"></td>

                    <td>
                            <!-- show detail -->
                            <a class="btn btn-small btn-success" href="{{route('restaurants.show',$value->id)}}">Show details</a>

                            <!-- edit food -->
                            <a class="btn btn-small btn-info" href="{{route('restaurants.edit',$value->id)}}">Edit this restaurant</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$restaurants->render()}}
    </div>
</body>

</html>
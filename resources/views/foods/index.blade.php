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

        <h1>All the foods</h1>

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
                    <td>Price</td>
                    <td>Category</td>
                    <td>Description</td>
                    <td>Photo</td>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->category }}</td>
                    <td>{{ $value->desc }}</td>
                    <td><img src="{{asset('image/foods/')}}/{{$value->image}}" alt="" style="max-width:50px;"></td>

                    <td>
                        <form action="{{ route('foods.delete',$value->id) }}" method="post">
                            <!-- show detail -->
                            <a class="btn btn-small btn-success" href="{{route('foods.show',$value->id)}}">Show details</a>

                            <!-- edit food -->
                            <a class="btn btn-small btn-info" href="{{route('foods.edit',$value->id)}}">Edit this food</a>

                            <!-- delete -->
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$foods->render()}}
    </div>
</body>

</html>
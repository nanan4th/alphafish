@include('restaurants.navigation')

        <h1>Edit a restaurant</h1>

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
        <form action="{{route('restaurants.update',$restaurants->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{old('name',$restaurants->name)}}">
            </div>

            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" value="{{old('address',$restaurants->address)}}">
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:50px" name="desc" placeholder="{{old('desc',$restaurants->desc)}}"></textarea>
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
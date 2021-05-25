@include('foods.navigation')
    <div class="container">
        <h1>Edit a food</h1>

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
        <form action="{{route('foods.update',$foods->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{old('name',$foods->name)}}">
            </div>

            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" value="{{old('price',$foods->price)}}">
            </div>

            <div class="form-group">
                <strong>Category:</strong>
                <input type="text" name="category" class="form-control" value="{{old('category',$foods->category)}}">
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:50px" name="desc" placeholder="{{old('desc',$foods->desc)}}"></textarea>
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
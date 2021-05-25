@include('restaurants.navigation')

        {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show food</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('restaurants.index')}}"> Back</a>
                </div>
            </div>
        </div>

        <h1>{{ $restaurants->name }}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $restaurants->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $restaurants->address }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $restaurants->desc }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="{{asset('image/restaurants/')}}/{{$restaurants->image}}" width="500px" alt="">
                </div>
            </div>
        </div>

    </div> --}}
    <div class="container">
        <div class="card mx-auto d-block my-3" style="width: 40%;">
            <img src="{{asset('image/restaurants/')}}/{{$restaurants->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">{{ $restaurants->name }}</h2>
                <p>{{ $restaurants->address }}</p>
                <p>{{ $restaurants->desc }}</p>
                <a class="btn btn-primary px-4" href="{{ route('foods.index') }}"> Back</a>
            </div>
        </div>
    </div>
</body>

</html>
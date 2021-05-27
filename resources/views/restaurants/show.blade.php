@include('restaurants.navigation')
    <div class="container">
        <div class="card mx-auto d-block my-3" style="width: 40%;">
            <img src="{{asset('image/restaurants/')}}/{{$restaurants->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">{{ $restaurants->name }}</h2>
                <p>{{ $restaurants->address }}</p>
                <p>{{ $restaurants->desc }}</p>
                <a class="btn btn-primary px-4" href="{{ route('restaurants.index') }}"> Back</a>
            </div>
        </div>
    </div>
</body>

</html>
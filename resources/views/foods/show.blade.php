@include('foods.navigation')
    <div class="card mx-auto d-block my-3" style="width: 40%;">
        <img src="{{asset('image/foods/')}}/{{$foods->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{ $foods->name }}</h2>
            <p>Rp. {{ $foods->price }}</p>
            <p>{{ $foods->category }}</p>
            <p>{{ $foods->desc }}</p>
            <a class="btn btn-primary px-4" href="{{ route('foods.index') }}"> Back</a>
        </div>
    </div>
</body>

</html>
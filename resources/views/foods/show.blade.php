@include('foods.navigation')

        {{-- <div class="row">
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
        </div> --}}

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="rounded" src="{{asset('image/foods/')}}/{{$foods->image}}" width="100%" alt="">
            </div>
            <div class="col-md-8">
                <h3>{{ $foods->name }}</h3>
                <h5>{{ $foods->price }}</h5>
                <h5>{{ $foods->category }}</h5>
                <p>{{ $foods->desc }}</p>
            </div>
        </div>
    </div> --}}

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
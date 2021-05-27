@include('header')
<img src="{{ asset('image/hero-image.jpg') }}" alt="" width="100%">

<div class="container">
    <section id="menu">
        <h2 class="text-center my-5">Menu</h2>

        <div class="row px-5">
        @foreach($foods as $key => $value)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%; height:400px">
                    <img src="{{asset('image/foods/')}}/{{$value->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $value->name }}</h3>
                        <p class="card-text">Rp. {{ $value->price }}</p>
                        <p class="card-text">{{ $value->desc }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        {{$foods->render()}}
    </section>
</div>
@include('footer')
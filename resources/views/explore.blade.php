@include('header')
<img src="https://via.placeholder.com/1200x300" alt="" width="100%">

<div class="container">
    <section id="menu">
        <h2 class="text-center my-5">Menu</h2>

        <div class="row px-5">
            <div class="col-md-4 mb-3">
                @foreach($foods as $key => $value)
                <div class="card" style="width: 100%;">
                    <img src="{{asset('image/foods/')}}/{{$value->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value->name }}</h5>
                        <p class="card-text">{{ $value->desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{$foods->render()}}
    </section>
</div>
@include('footer')
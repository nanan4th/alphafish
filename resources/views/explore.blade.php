@include('header')
<img src="https://via.placeholder.com/1200x300" alt="" width="100%">

<div class="container">
    <section id="menu">
        <h2 class="text-center my-5">Menu</h2>
        <!-- nanti ini hapus aja -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $key => $value)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->category }}</td>
                    <td>{{ $value->desc }}</td>
                    <td class="text-center"><img src="{{asset('image/foods/')}}/{{$value->image}}" alt="" style="max-width:80px;"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$foods->render()}}
        <!-- nanti diatas hapus aja -->

        <div class="row px-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="https://via.placeholder.com/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('footer')
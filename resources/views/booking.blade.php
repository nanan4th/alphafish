@include('header')

<div class="container">
    <section id="restaurant" class="p-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('image/dummy_resto/resto_1.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Alphafish North Jakarta</h3>
                        <a href="#">
                        Taman Impian Jaya Ancol, Jalan Lodan timur No.7, Ancol, Kota Jkt Utara, Jakarta 14430
                        </a>
                        <p>Alphafish North Jakarta is the most unique compared to other branches because it is located on the seafront.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('image/dummy_resto/resto_2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Alphafish Malang</h3>
                        <a href="#">Jalan MT. Haryono No.7-5, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</a>
                        <p>The Malang's branch of Alphafish Restaurant is located near Brawijaya University and is often a student gathering place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('image/dummy_resto/resto_3.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Alphafish Bogor</h3>
                        <a href="#">Jalan Kapten Kabir No.724, Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 12130</a>
                        <p>This restaurant is located in Puncak, Cisarua Bogor and this Alphafish branch has fresh air because it is located in a mountainous area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="booking">
        <h1 class="text-center mb-5">Booking</h1>

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
        <form action="{{route('orders.store')}}" method="post">
            @csrf

            <div class="row mb-3">
                <label for="nama" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" placeholder="Masukan nama" name="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="date" class="col-sm-3 col-form-label col-form-label-sm">Tanggal</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="dates" name="dates">
                </div>
            </div>

            <div class="row mb-3">
                <label for="hour" class="col-sm-3 col-form-label col-form-label-sm">Waktu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hour" placeholder="Masukan waktu pesanan" name="hour">
                </div>
            </div>

            <div class="row mb-3">
                <label for="numberOfPeople" class="col-sm-3 col-form-label col-form-label-sm">Jumlah Orang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="numberOfPeople" placeholder="Masukan jumlah orang" name="numberOfPeople">
                </div>
            </div>

            <div class="row mb-3">
                <label for="restaurant" class="col-sm-3 col-form-label col-form-label-sm">Restaurant</label>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="restaurant" id="opsiJakarta" value="Alphafish Jakarta Utara">
                        <label class="form-check-label" for="opsiJakarta">
                            Alphafish Jakarta Utara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="restaurant" id="opsiMalang" value="Alphafish Malang">
                        <label class="form-check-label" for="opsiMalang">
                            Alphafish Malang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="restaurant" id="opsiBogor" value="Alphafish Bogor">
                        <label class="form-check-label" for="opsiBogor">
                            Alphafish Bogor
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </section>

</div>

@include('footer')
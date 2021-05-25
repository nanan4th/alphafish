@include('header')

<div class="container">
    <section id="restaurant" class="p-5">
        <div class="row">
            <div class="col-md-4">
                <figure>
                    <img src="https://via.placeholder.com/250" alt="Trulli" style="width:100%" class="mb-3">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <img src="https://via.placeholder.com/250" alt="Trulli" style="width:100%" class="mb-3">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure>
                    <img src="https://via.placeholder.com/250" alt="Trulli" style="width:100%" class="mb-3">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
                </figure>
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
                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="restaurant" class="col-sm-3 col-form-label col-form-label-sm">Restaurant</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="restaurant" placeholder="Masukan nama restaurant" name="restaurant">
                </div>
            </div>

            <div class="row mb-3">
                <label for="date" class="col-sm-3 col-form-label col-form-label-sm">Tanggal</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="date" name="date">
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

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </section>

</div>

@include('footer')
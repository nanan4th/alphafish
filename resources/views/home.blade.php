@include('header')

<div class="container">
    <section id="banner">
        <div class="row">
            <div class="col m7">
                <h1>Order Now!</h1>
                <p>Alphafish is the best seafood restaurant in North Jakarta that has a specialty in crispy fish and paste. We make our foods with the freshest ingredient that we take it straight from the North Jakarta beach.</p>
                <a href="/login">
                    <button type="button" class="mx-1 px-4 btn btn btn-outline-dark rounded-pill">Masuk</button>
                </a>
            </div>
            <div class="col py-5">
                <img class="rounded mx-auto d-block" src="{{ asset('image/home-image.jpg') }}" alt="not found image" width="100%"/>
            </div>
        </div>
    </section>
    <hr>
    <section id="value">
        <h2 class="text-center">Why Alphafish</h2>
        <div class="row  m-5">
            <div class="col-md">
                <img class="mx-auto d-block mb-3" src="{{ asset('image/fitur/seafood.png') }}" alt="">
                <h5 class="text-center">Feeling Hungry?</h5>
                <p class="text-center">We offer you the best seafood in town</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="mx-auto d-block mb-3" src="{{ asset('image/fitur/reservation.png') }}" alt="">
                <h5 class="text-center">Skip the crowd?</h5>
                <p class="text-center">Book your table from anywhere and anytime</p>
            </div>
            <div class="col-md-6">
                <img class="mx-auto d-block mb-3" src="{{ asset('image/fitur/delivery-man.png') }}" alt="">
                <h5 class="text-center">Lazy to go out?</h5>
                <p class="text-center">Alphafish soon can come to your home!</p>
            </div>
        </div>
    </section>
    <hr>
    <section id="menu">
        <h2 class="text-center my-5">Menu</h2>
        <div class="row px-5">
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('image/dummy_foods/food_1.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Hot Coffe</h5>
                    <p class="card-text">Segelas Kopi Panas yang menenangkan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('image/dummy_foods/food_2.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Cheesy Pasta Bowl</h5>
                    <p class="card-text">Semangkuk Pasta saus Keju dengan ikan goreng kecil</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('image/dummy_foods/food_3.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Fish and Chips Chilli Combre</h5>
                    <p class="card-text">Ikan Goreng Full Size dengan Kentang Goreng dan bumbu Chilli Combre</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('image/dummy_foods/food_4.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Frappucino Oreo</h5>
                    <p class="card-text">Minuman yang dibuat dari frappucino yang dibubuhi dengan oreo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="ulasan">
        <h2 class="text-center my-5">Review</h2>
        <div class="row">
            <div class="col text-center">
                <img class="mb-3 rounded-circle mx-auto d-block" src="{{ asset('image/review/man_1.png') }}" alt="">
                <h3>Farid Syauqi</h3>
                <p>It’s a great experience. The ambiance is very welcoming and charming. Amazing food and service. Staff are extremely knowledgeable and make great recommendations</p>
            </div>
            <div class="col text-center">
                <img class="mb-3 rounded-circle mx-auto d-block" src="{{ asset('image/review/woman_1.png') }}" alt="">
                <h3>Khadija</h3>
                <p>This is my absolute favorite seafood restaurant. The food is always fantastic and no matter what I order I am always delighted with my meal!</p>
            </div>
            <div class="col text-center">
                <img class="mb-3 rounded-circle mx-auto d-block" src="{{ asset('image/review/man_2.png') }}" alt="">
                <h3>Alex Basiman</h3>
                <p>The menu is extensive and seasonal to a particularly high standard. Definitely the best seafood restaurant</p>
            </div>
        </div>
    </section>
</div>

@include('footer')
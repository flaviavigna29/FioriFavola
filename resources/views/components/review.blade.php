<div class="container py-5 h-100" data-aos="zoom-in"
data-aos-delay="200" data-aos-duration="1000">

    <div class="row my-4 justify-content-center align-items-center h-100 py-4 rounded-5"
        style="background-color:#cec0aae0; border:var(--bottle-color) 2px solid">

        <h3 class="tx-bottle fw-bold mb-5 text-center my-2">Leggi le nostre recensioni</h3>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($reviews as $index => $review)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center">
                                <img src="{{ Storage::url($review->img) }}" alt="" class="mx-3" style="width: 100px">
                                <div class="mx-3 mt-3">
                                    <h5 class="fw-bold">{{ $review->name }} {{ $review->surname }}</h5>
                                    <p>{{ $review->message }}</p>
                                </div>
                            </div>
                            <div class="col-10 col-md-8 mt-4 text-center lead">
                                <p>{{ $review->body }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <i class="bi bi-caret-left-fill tx-bottle fs-2"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <i class="bi bi-caret-right-fill tx-bottle fs-2"></i>
            </button>
        </div>
        
        
        <div class="col-10 col-md-8 mt-5 text-center lead">
            <p class="fs-6 text-center font-tit fw-bold p-2 my-2 btn btn-outline-secondary button_"><a
                    href="{{ route('review.create') }}" class="text-decoration-none text-black ">Scrivi una
                    recensione su di noi</a></p>
        </div>
    </div>
</div>

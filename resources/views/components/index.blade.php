<div class="container py-5 h-100">

    <div class="row text-center">

    </div>

    <div class="row my-4 justify-content-center align-items-center h-100 py-4 rounded-5"
        style="background-color:#EBEBE5; border:var(--bottle-color) 2px solid">
        
            <h3 class="tx-bottle fw-bold mb-5 text-center my-2">Leggi le nostre recensioni</h3>

        
        <swiper-container class="mySwiper" navigation="true">
            @foreach ($reviews as $review)
                <swiper-slide>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-10 d-flex justify-content-center align-items-center">

                            <img src="{{ Storage::url($review->img) }}" alt="" class="mx-3" style="width: 100px" >
                            <div class="mx-3 mt-3">
                                <h5 class="fw-bold">{{ $review->name }} {{ $review->surname }}</h5>
                                <p>{{ $review->message }}</p>
                            </div>

                        </div>


                        <div class="col-10 col-md-8 mt-4 text-center lead">
                            <p>{{ $review->body }}</p>
                        </div>
                    </div>

                </swiper-slide>
            @endforeach

        </swiper-container>

        <div class="col-10 col-md-8 mt-5 text-center lead">
            <p class="fs-6 text-center font-tit fw-bold p-2 my-2 btn btn-outline-secondary button_"><a
                    href="{{ route('review.create') }}" class="text-decoration-none text-black ">Scrivi una
                    recensione su di noi</a></p>
        </div>
    </div>
</div>

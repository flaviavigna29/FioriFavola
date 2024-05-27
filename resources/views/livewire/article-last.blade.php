<div class="container my-5">
    <div class="row justify-content-center align-items-center ">
        <div class="col-12 my-5">
            <h3 class="h1 text-center font-tit tx-bottle" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                Gli ultimi arrivi!</h3>
        </div>
    </div>
    {{-- @dd($articles) --}}

    {{-- CARD ARTICOLI --}}
    <div class="col-12">
        <div class="container">
            <div class="row justify-content-around">
                {{-- @dd($articles) --}}
                @foreach ($articles as $article)
                    <div class="col-11 col-md-4 col-lg-3 mb-3">
                        <x-card :$article>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                Nuovo
                            </span>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

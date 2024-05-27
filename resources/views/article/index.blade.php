<x-layout>
    <section class="container-fluid my-5 py-5">
        <div class="row justify-content-evenly">

            <div class="col-12 my-lg-5 mb-2">
                <h2 class="display-6 text-center tx-bottle font-tit my-2">{{ $category->name }}</h2>
                <div class="col-12 col-md-8 col-lg-6 text-center d-flex justify-content-center mx-auto ">
                    <p class="text-center tx-bottle font-tit mt-2 fs-lg-6">{{ $category->description }}</p>
                </div>

                <div class="row justify-content-center mt-2">
                    <x-display-message />
                </div>
            </div>

            {{-- COLONNA CATEGORIE SCHERMO GRANDE --}}
            <div class="col-lg-3 px-lg-4 d-none d-lg-block">
                <div class="position-sticky">
                    @foreach ($categories as $el)
                        @if ($el->id !== $category->id)
                            <a href="{{ route('article.index', ['category' => $el->id]) }}" class="text-decoration-none">
                                <div class="card mb-3 card_index" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-2">
                                            <img src="{{ '/' . $el->img }}" class=" rounded-start" alt="..."
                                                style="width: 70px">
                                        </div>
                                        <div class="col-8 card-body d-flex flex-column justify-content-end ">
                                            <h5 class="card-title ps-3">{{ $el->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- CARD ARTICOLI --}}
            <div class="col-12 col-lg-8">
                <div class="container">
                    <div class="row justify-content-around">
                        @foreach ($articles as $article)
                            <div class="col-md-6 col-lg-4 mb-3">
                                <x-card :$article />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>

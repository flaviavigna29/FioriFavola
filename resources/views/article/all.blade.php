<x-layout>
    <x-display-message />
    <section class="container-fluid my-5 py-5">
        <div class="row justify-content-evenly">

            <div class="col-12 my-5">

                <h2 class="display-6 text-center tx-bottle font-tit my-2">Tutti i nostri articoli</h2>

            </div>

            {{-- COLONNA FILTRI --}}
            <div class="col-12 col-lg-3 px-4" id="sezioneFiltri">
                <div class="position-sticky my-5">
                    <div class="mb-5">
                        <h5 class="font-tit">Filtro per Parola</h5>
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Cerca tra gli articoli</label>
                            <input type="text" class="form-control search_" id="inputWord" placeholder="">
                        </div>
                    </div>

                    <div class="mb-5">
                        <h5 class="font-tit">Filtro per Prezzo</h5>
                        <label for="customRange1" class="form-label my-1 justify-content-between">da €0 a €<span
                                id="currentValue"></span></label>
                        <input id="inputPrice" type="range" class="form-range color-point" max=""
                            min="" value="">

                    </div>

                </div>


            </div>

            {{-- CARD ARTICOLI --}}
            <div class="col-12 col-lg-8">
                <div class="container">
                    <div class="row justify-content-around" id="articlesWrapper">
                        {{-- @dd($articles) --}}
                        @foreach ($articles as $article)
                            <div class="col-11 col-md-4 col-lg-4 mb-3">
                                <x-card :$article />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>

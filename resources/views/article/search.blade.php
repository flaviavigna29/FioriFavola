<x-layout>
    <section class="container-fluid my-5 py-5">
        <div class="row justify-content-evenly">

            <div class="col-12 my-5">

                <h2 class="display-6 text-center tx-bottle font-tit my-2">Risultati della tua ricerca:</h2>
                <div class="row justify-content-center mt-2">
                    <x-display-message />
                </div>
            </div>



            {{-- CARD ARTICOLI --}}
            <div class="col-12">
                <div class="container">
                    <div class="row justify-content-around" id="articlesWrapper">
                        @forelse ($articles as $article)
                            <div class="col-11 col-md-4 col-lg-4 mb-3">
                                <x-card :$article />
                            </div>
                        @empty
                            <div class="col-12 mb-3">
                                <h5 class="tx-bottle font-tit my-2 text-center ">Non ci sono articoli per la tua ricerca.</h5>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>

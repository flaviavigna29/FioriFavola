<x-layout>
    <section class="container-fluid my-5 py-5">
        <div class="row justify-content-evenly">

            <div class="col-12 my-lg-5 mb-5">

                <h2 class="display-6 text-center tx-bottle font-tit my-2">Tutti i nostri articoli</h2>

            </div>

            {{-- COLONNA FILTRI --}}
            <div class="col-10 d-flex justify-content-end mb-3">
                <div>
                    <livewire:article-filter 
                    />
                </div>
            </div>

            {{-- CARD ARTICOLI --}}
            <div class="col-12 mx-auto">
                <div class="container">
                    <livewire:article-all />
                </div>
            </div>
        </div>
    </section>

        {{-- ! Sezione Ultimi Articoli Inseriti --}}
        <livewire:article-last />

        {{-- ! Sezione Informazioni --}}
        <x-information />
    
        {{-- ! Sezione Newsletter --}}
        <x-newsletter />

</x-layout>

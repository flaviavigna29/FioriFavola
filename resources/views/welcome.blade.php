<x-layout>
    {{-- ! Header  --}}
    <header class="container-fluid position-relative header_home">
        <div class="row justify-content-center">
            <x-display-errors />
            <x-display-message />
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 position-absolute header_position">
                <p class="display-5 text-center font-tit fw-bolder tx-bottle text_shadow mb-4" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">In cerca della pianta perfetta?</p>
                <p class="text-center font-tit text_shadow mb-5 fs-3" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">Scopri quale fa al caso tuo!</p>

                <!-- Form di ricerca -->
                <form action="{{ route('article.search') }}" method="GET" role="search" class="d-flex"
                    data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" type="search">
                    <input name="searched" class="form-control font-tit py-3 search_ text-center"
                        placeholder='es. "Kenzia", "Venus Flytrap", ... ' aria-label="Search">
                    <button type="submit" class="btn btn-search ms-3">Cerca</button>
                </form>

            </div>
    </header>

    {{-- ! Riga citazione --}}
    <div class="container my-2 my-lg-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-8 d-flex bg_cit" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                <h3 class="text-center font-cit tx-bottle py-5">Ed in mezzo ad un giardino di sogni, ogni
                    pianta è
                    una storia che fiorisce, ogni fiore è un capitolo di bellezza e ogni foglia è una pagina di
                    speranza.</h3>
            </div>
        </div>
    </div>

    {{-- ! Sezione Categorie --}}
    <section class="container-fluid mb-5 bg_categories">

        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-12">
                <h3 class="h1 text-center font-tit tx-bottle" data-aos="zoom-in" data-aos-delay="400"
                    data-aos-duration="800">Prenditi cura delle tue piante</h3>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly align-items-center" data-aos="zoom-in" data-aos-delay="400"
                data-aos-duration="900">
                @foreach ($categories as $category)
                    <div class="col-6 col-lg-5 my-2">
                        <a href="{{ route('article.index', compact('category')) }}"
                            class="justify-content-center align-items-center d-flex flex-column mx-auto">
                            <div class="card text-bg-light card_categories">
                                <img src="{{ $category->img }}" class="card-img rounded-4" alt="...">
                                <div class="card-img-overlay text-center">
                                    <div class="col_shadow py-0 py-md-3">
                                        <h5 class="card-title fw-bolder">{{ $category->name }}</h5>
                                        <p class="card-text d-none fw-bold d-lg-block">
                                            {{ $category->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    {{-- ! Sezione Ultimi Articoli Inseriti --}}
    <livewire:article-last />

    {{-- ! Sezione Informazioni --}}
    <x-information />

    {{-- ! Sezione Storia --}}
    <section class="container-fluid my-5 py-5 bg_history">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-5 mb-5 d-flex flex-column col_shadow p-4" data-aos="zoom-in" data-aos-delay="250"
                data-aos-duration="800">
                <h3 class="display-4 text-center font-tit tx-bottle text-uppercase fw-bold my-2 text_shadow">la
                    nostra storia</h3>
                <p class="fs-5 text-center font-tit text-uppercase fw-bold bg_green p-2 my-2 rounded"><a
                        href="{{ route('storia') }}" class="text-decoration-none hover_history">scopriamola
                        insieme</a></p>
            </div>
        </div>
    </section>

    {{-- ! Sezione Recensioni --}}
    <x-review :reviews=$reviews />

    {{-- ! Sezione Newsletter --}}
    <x-newsletter />

</x-layout>

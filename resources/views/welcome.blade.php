<x-layout>
    {{-- ! Header  --}}
    <header class="container-fluid position-relative header_home">
        <div class="row justify-content-center">
            <x-display-errors />
            <x-display-message />
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 position-absolute header_position">
                <p class="display-5 text-center font-tit tx-bottle text_shadow mb-4" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">In cerca della pianta perfetta?</p>
                <p class="text-center font-tit text_shadow mb-5 fs-3" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">Scopri quale fa al caso tuo!</p>
                <input class="form-control font-tit py-3 search_ text-center" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="1000" type="search" placeholder='es. "Kenzia", "Venus Flytrap", ... '
                    aria-label="Search">
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
    <section class="container mb-5">

        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-12">
                <h3 class="h1 text-center font-tit tx-bottle" data-aos="zoom-in" data-aos-delay="400"
                    data-aos-duration="800">Prenditi cura delle tue piante</h3>
            </div>
        </div>

        <div class="row justify-content-between align-items-center bg_categories" data-aos="zoom-in"
            data-aos-delay="400" data-aos-duration="900">

            <div class="col-6 col-lg-5 my-2">
                <a href="{{ route('article.index', ['category' => 'Cura e difesa']) }}" class="justify-content-center align-items-center d-flex flex-column mx-auto">
                    <div class="card text-bg-light card_categories">
                        <img src="media/categorie/1.png" class="card-img rounded-4" alt="...">
                        <div class="card-img-overlay text-center">
                            <div class="col_shadow py-0 py-md-3">
                                <h5 class="card-title fw-bold">Cura e difesa</h5>
                                <p class="card-text d-none d-lg-block">
                                    Hai bisogno di un equipaggiamento completo e di qualità per difendere e curare
                                    gli ambienti e le piante di casa? Niente paura… sei nel posto giusto! Scopri
                                    tutti i prodotti che abbiamo testato e selezionato per te e che ti renderanno
                                    vincente!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-5 my-2">
                <a href="{{ route('article.index', ['category' => 'Bellezza vitale']) }}" class="justify-content-center align-items-center d-flex flex-column mx-auto">
                    <div class="card text-bg-light card_categories">
                        <img src="media/categorie/2.png" class="card-img rounded-4" alt="...">
                        <div class="card-img-overlay text-center">
                            <div class="col_shadow py-0 py-md-3">
                                <h5 class="card-title fw-bold">Bellezza vitale</h5>
                                <p class="card-text d-none d-lg-block">
                                    In questa categoria trovi tutto ciò che serve alle tue piante per crescere forti
                                    e vigorose... Parliamo di concimi e fitostimolanti!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-5 my-2">
                <a href="{{ route('article.index', ['category' => 'Terricci e substrati']) }}" class="justify-content-center align-items-center d-flex flex-column mx-auto">
                    <div class="card text-bg-light card_categories">
                        <img src="media/categorie/3.png" class="card-img rounded-4" alt="...">
                        <div class="card-img-overlay text-center">
                            <div class="col_shadow py-0 py-md-3">
                                <h5 class="card-title fw-bold">Terricci e substrati</h5>
                                <p class="card-text d-none d-lg-block">
                                    In questa categoria trovi tutti i terricci, substrati e torbe professionali di
                                    nostra produzione, prodotti finiti e pronti all’uso di altissima qualità, adatti
                                    a tutte le piante che trovi sul nostro shop!.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-5 my-2">
                <a href="{{ route('article.index', ['category' => 'Attrezzi']) }}" class="justify-content-center align-items-center d-flex flex-column mx-auto">
                    <div class="card text-bg-light card_categories">
                        <img src="media/categorie/4.png" class="card-img rounded-4" alt="...">
                        <div class="card-img-overlay text-center">
                            <div class="col_shadow py-0 py-md-3">
                                <h5 class="card-title fw-bold">Attrezzi da lavoro</h5>
                                <p class="card-text d-none d-lg-block">
                                    Hai bisogno di un alleato per tenere in ordine il tuo giardino? Scopri gli
                                    strumenti che abbiamo selezionato per te, con caratteristiche di qualità e di
                                    durata nel tempo. Con il giusto attrezzo far giardinaggio diventerà comodo e
                                    piacevole…un gioco da ragazzi!
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

    {{-- ! Sezione Ultimi Fiori Inseriti --}}
    {{-- <section class="container-fluid my-5 sfondo">
        <div class="row justify-content-center align-items-center ">
            <div class="col-12">
                <h3 class="h1 text-center font-tit tx-bottle" data-aos="zoom-in" data-aos-delay="400"
                    data-aos-duration="800">Tutti li
                    vogliono... I Best Seller!</h3>
            </div>
        </div>
        Carosello Swiper
        <div class="swiper mySwiper px-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
            data-aos-delay="600" data-aos-duration="1000">
            <div class="swiper-wrapper py-5 "></div>
            <div class="swiper-pagination"></div>
        </div>
        Fine Carosello Swiper
        <div id="lastWrapper" class="row px-0 mx-0 px-md-5 mx-md-5"></div>
    </section> --}}

    {{-- ! Sezione Informazioni --}}
    <x-information />

    {{-- ! Sezione Storia --}}
    <section class="container-fluid my-5 py-5 bg_history">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-5 mb-5 d-flex flex-column col_shadow p-4" data-aos="zoom-in"
                data-aos-delay="800" data-aos-duration="800">
                <h3 class="display-4 text-center font-tit tx-bottle text-uppercase fw-bold my-2 text_shadow">la
                    nostra storia</h3>
                <p class="fs-5 text-center font-tit text-uppercase fw-bold bg_green p-2 my-2 rounded"><a
                        href="{{ route('storia') }}" class="text-decoration-none hover_history">scopriamola
                        insieme</a></p>
            </div>
        </div>
    </section>

    {{-- ! Sezione Numeri --}}
    {{-- <section class="container-fluid py-5 sfondo">

        <div class="row justify-content-center align-items-center h-100">

            <div class="col-12 mb-5" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                <h2 class="h1 text-center font-tit tx-bottle">I nostri numeri</h2>
            </div>

            <div class="col-10 col-lg-2 my-2 box-numbers d-flex flex-column align-items-center justify-content-center m-2"
                data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000">
                <h5 class="pt-3">Utenti:</h5>
                <p class="fs-5"><span id="numUsers">0</span>+</p>
            </div>

            <div class="col-10 col-lg-2 my-2 box-numbers d-flex flex-column align-items-center justify-content-center m-2"
                data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000">
                <h5 class="pt-3">Piante:</h5>
                <p class="fs-5"><span id="numPlants">0</span>+</p>
            </div>

            <div class="col-10 col-lg-2 my-2 box-numbers d-flex flex-column align-items-center justify-content-center m-2"
                data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000">
                <h5 class="pt-3">Commenti:</h5>
                <p class="fs-5"><span id="numComments">0</span>+</p>
            </div>
        </div>
    </section> --}}

    {{-- ! Sezione Recensioni --}}
    <x-review :reviews=$reviews>

    </x-review>

    {{-- ! Sezione Newsletter --}}
    <x-newsletter />

    {{-- ! JS Numeri --}}
    {{-- <script>
        // NUMERI 
        let numUsers = document.querySelector("#numUsers")
        let numPlants = document.querySelector("#numPlants")
        let numComments = document.querySelector("#numComments")

        function createInterval(elementId, finalNumber, frequency) {
            let counter = 0

            let intervallo = setInterval(() => {
                if (counter < finalNumber) {
                    counter++
                    elementId.innerHTML = counter;
                } else {
                    clearInterval(intervallo)
                }
            }, frequency);
        }

        let isIntersected = false;

        const intersectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && isIntersected == false) {

                    createInterval(numUsers, 300, 10)
                    createInterval(numPlants, 600, 5)
                    createInterval(numComments, 100, 30)
                    isIntersected = true;
                    setTimeout(() => {
                        isIntersected = false;
                    }, 10000);
                }
            })
        })

        intersectionObserver.observe(numUsers)
    </script> --}}
</x-layout>

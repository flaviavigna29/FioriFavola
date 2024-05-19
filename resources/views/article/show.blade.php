<x-layout>
    <header class="container-fluid header_article d-flex justify-content-center align-items-center ">
        <div class="row">
            <h4 class="font-cit fw-bold tx-bottle title_history text-center ">{{ $article->title }}</h4>
        </div>
    </header>
    <article class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pt-5 ">
                <img src="{{ Storage::url($article->img) }}" alt="" 
                    class="rounded position-sticky img-fluid">
            </div>
            <div class="col-12 col-lg-6 pt-5 position-relative">
                <div class="col position-absolute top-5 end-0">
                    <a href="" class="mx-3"><i class="bi bi-heart-fill fs-1 tx-bottle"></i></a>
                </div>
                <p class="my-3 fs-3 ">{{ $article->description }}</p>
                <h3 class="my-3">{{ $article->price }} €</h3>
                <div class="d-flex my-5">
                    <i class="bi bi-dash-circle fs-3 me-2 tx-bottle"></i>
                    <p class="fs-3">1</p>
                    <i class="bi bi-plus-circle fs-3 ms-2 tx-bottle"></i>
                    <p class="fs-6 text-center font-tit fw-bold btn btn-outline-secondary button_ ms-4 px-3 pt-1">
                        <a href="#" class="text-decoration-none text-black ">Aggiungi al carrello</a>
                    </p>
                </div>
                <p class="mt-5 mb-3 font-tit fs-2 tx-bottle fw-bold">{{ $article->subtitle }}</p>
                <p class="my-3 fs-5" style="white-space: pre-wrap;">{{ $article->body }}</p>
            </div>
        </div>


        <x-information />
    </article>
</x-layout>

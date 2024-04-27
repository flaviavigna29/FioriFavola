<div class="cardArticles h-100 position-relative">
    <div class="overflow-hidden">
        <img src="{{Storage::url($article->img)}}" class="img-card card-img-top" alt="...">
        <i class="bi bi-heart-fill fs-3 position-absolute heart"></i>
    </div>
    <div class="card-body d-flex flex-column mx-1">
        <div>
            <h4 class="card-title text-center text-truncate my-2">{{ $article->title }}</h4>
            <p class="card-text mb-2">Prezzo: <span class="fw-bold">{{ $article->price }}</span>€</p>
        </div>

        <div>
            <div class="d-flex justify-content-between tx-bottle">
                <i class="bi bi-info-circle-fill fs-4 tx-bottle text-center"></i>
                <i class="bi bi-bag-heart-fill fs-4"></i>
            </div>
        </div>

    </div>
</div>

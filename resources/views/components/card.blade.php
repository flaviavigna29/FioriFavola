<div class="cardArticles h-100 position-relative">
    <div class="overflow-hidden">
        <img src="{{ Storage::url($article->img) }}" class="img-card card-img-top" alt="...">
        <i class="bi bi-heart-fill fs-3 position-absolute heart"></i>
    </div>
    <div class="card-body d-flex flex-column mx-1">
        <div>
            <h4 class="card-title text-center text-truncate my-2">{{ $article->title }}</h4>
            <p class="card-text mb-2">Prezzo: <span class="fw-bold">{{ $article->price }}</span>€</p>
        </div>

        <div>
            <div class="d-flex justify-content-between tx-bottle">
                <a href="{{ route('article.show', compact('article')) }}"><i
                        class="bi bi-info-circle-fill fs-4 tx-bottle"></i></a>

                @if (Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('article.edit', compact('article')) }}"><i
                            class="bi bi-pencil-fill fs-4 text-warning"></i></a>

                    <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-transparent border-0 text-end"><i
                                class="bi bi-trash3-fill fs-4 text-danger "></i>
                        </button>
                    </form>
                @endif


                <i class="bi bi-bag-heart-fill fs-4"></i>
            </div>
        </div>
    </div>
</div>

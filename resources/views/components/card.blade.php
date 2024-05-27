<div class="cardArticles h-100 position-relative" 
{{-- data-aos="flip-left" data-aos-delay="400" data-aos-duration="900" --}}
>
    {{ $slot }}

    <div class="overflow-hidden">
        <img src="{{ Storage::url($article->img) }}" class="img-card card-img-top" alt="...">
    </div>
    <div class="card-body d-flex flex-column mx-1">
        <div>
            <h4 class="card-title text-center text-truncate my-2">{{ $article->title }}</h4>
            <p class="card-text mb-2">Prezzo: <span class="fw-bold">{{ $article->price }}</span>€</p>
        </div>

        <div>
            <div class="d-flex justify-content-between tx-bottle">
                <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
                    data-bs-target="#article{{ $article->id }}">
                    <i class="bi bi-info-circle-fill fs-4 tx-bottle"></i>
                </button>

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

                <!-- form per aggiungere al carrello -->
                @auth
                    <livewire:add-to-wishlist :articleId="$article->id" />
                @endauth
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade sfondo" id="article{{ $article->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 tx-bottle" id="exampleModalLabel">{{ $article->title }}</h1>
            </div>
            <div class="modal-body">
                <div class="col-12 d-flex justify-content-center ">
                    <img src="{{ Storage::url($article->img) }}" alt="" class="">
                </div>
                <div class="col-12 pt-1">
                    <h4 class="my-3 fs-5 ">{{ $article->description }}</h4>
                    <h5 class="mt-5 mb-3 font-tit fs-4 tx-bottle fw-bold">{{ $article->subtitle }}</h5>
                    <p class="my-3 lead" style="white-space: pre-wrap;">{{ $article->body }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mx-auto py-2 px-4 button_" data-bs-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>

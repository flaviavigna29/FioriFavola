<x-layout>
    {{-- ! Header  --}}
    <x-display-message/>
    <section class="container-fluid sfondo mt-5 py-5">
        <div class="row justify-content-center mt-2">
            <div class="col-12 col-lg-6 justify-content-center align-items-center">
                <form class="rounded-4 shadow m-3 m-lg-5 p-3"
                    style="background-color:#cec0aae0; border:var(--bottle-color) 2px solid" method="POST"
                    enctype="multipart/form-data" action="{{route('article.update', compact('article'))}}">
                    <div class="row">
                        @method('PUT')
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger p-0 my-2">
                                <ul class="my-1 ">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h3 class="text-center tx-bottle my-3 fw-bold">Modifica Articolo</h3>
                        <div class="mb-3">
                            <input name="title" type="text" placeholder="Nome dell'articolo" value="{{$article->title}}"
                                class="form-control search_">
                        </div>
                        <div class="mb-3">
                            <input name="price" type="text" class="form-control search_" placeholder="Prezzo (es. 3.15)" value="{{$article->price}}">
                        </div>   
                        <div class="mb-3">
                            <span class="form-label">Immagine attuale:</span>
                            <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" width="400">
                        </div>
                        <div class="mb-3">
                            <input name="img" type="file" class="form-control d-flex me-3 search_">
                        </div>
                        <div class="mb-3">
                            <input name="description" type="text" class="form-control search_"
                                placeholder="Breve descrizione" value="{{$article->description}}">
                        </div>
                        <div class="mb-3">
                            <input name="subtitle" type="text" placeholder="Titolo n. 2" class="form-control search_" value="{{$article->subtitle}}">
                        </div>
                        <div class="mb-3">
                            <textarea name="body" class="form-control search_" cols="30" rows="10" maxlength="10000"
                                placeholder="Testo descrittivo dell'articolo">{{$article->body}}</textarea>
                        </div>
                        <div class="justify-content-around d-flex">
                            <button type="submit" class="btn bg_green px-4 py-1 "><i
                                    class="bi bi-arrow-right text-white fs-4"></i></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

</x-layout>

<x-layout>
    {{-- ! Header  --}}
    <x-display-message/>
    <section class="container-fluid sfondo mt-5 py-5">
        <div class="row justify-content-center mt-2">
            <div class="col-12 col-lg-6 justify-content-center align-items-center">
                <form class="rounded-4 shadow m-3 m-lg-5 p-3"
                    style="background-color:#cec0aae0; border:var(--bottle-color) 2px solid" method="POST"
                    enctype="multipart/form-data" action="{{ route('article.store') }}">
                    <div class="row">
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
                        <h3 class="text-center tx-bottle my-3 fw-bold">Crea Articolo</h3>
                        <div class="mb-3">
                            <input name="title" type="text" placeholder="Nome dell'articolo" value="{{old('title')}}"
                                class="form-control search_">
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <input name="price" type="text" class="form-control search_" placeholder="Prezzo (es. 3.15)" value="{{old('price')}}">
                        </div>
                        <div class="dropdown-center col-12 col-md-4 mb-3 d-flex justify-content-center">
                            <button class="btn search_ dropdown-toggle bg-light px-4" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categoria:
                            </button>
                            <ul class="dropdown-menu px-4">
                                <li class="form-check fs-5 dropdown-item">
                                    <input class="form-check-input search_" type="radio" name="category"
                                        value="Piante" id="P">
                                    <label class="form-check-label" for="P">
                                        Piante
                                    </label>
                                </li>
                                <li class="form-check fs-5 dropdown-item">
                                    <input class="form-check-input search_" type="radio" name="category"
                                        value="Cura e difesa" id="C">
                                    <label class="form-check-label" for="C">
                                        Cura
                                    </label>
                                </li>
                                <li class="form-check fs-5 dropdown-item">
                                    <input class="form-check-input search_" type="radio" name="category"
                                        value="Bellezza vitale" id="B">
                                    <label class="form-check-label" for="B">
                                        Bellezza
                                    </label>
                                </li>
                                <li class="form-check fs-5 dropdown-item">
                                    <input class="form-check-input search_" type="radio" name="category"
                                        value="Terricci e substrati" id="T">
                                    <label class="form-check-label" for="T">
                                        Terricci
                                    </label>
                                </li>
                                <li class="form-check fs-5 dropdown-item">
                                    <input class="form-check-input search_" type="radio" name="category"
                                        value="Attrezzi da lavoro" id="A">
                                    <label class="form-check-label" for="A">
                                        Attrezzi
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-3 ">
                            <input name="img" type="file" class="form-control d-flex me-3 search_">
                        </div>
                        <div class="mb-3">
                            <input name="description" type="text" class="form-control search_"
                                placeholder="Breve descrizione" value="{{old('description')}}">
                        </div>
                        <div class="mb-3">
                            <input name="subtitle" type="text" placeholder="Titolo n. 2" class="form-control search_" value="{{old('subtitle')}}">
                        </div>
                        <div class="mb-3">
                            <textarea name="body" class="form-control search_" cols="30" rows="10" maxlength="10000"
                                placeholder="Testo descrittivo dell'articolo">{{old('body')}}</textarea>
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

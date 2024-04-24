<x-layout>
    {{-- ! Header  --}}
    <header class="container-fluid position-relative sfondo_bambu">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 position-absolute header_position">
                <p class="display-5 text-center font-tit tx-bottle text_shadow mb-4">Crea la tua Recensione</p>
            </div>
        </div>
        <div class="row justify-content-center mt-0">
            <x-display-message />
        </div>
    </header>

    <div class="container-fluid position-relative sfondo_bambu_2 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 justify-content-center align-items-center">
                <form class="rounded-4 shadow m-3 m-lg-5 p-3"
                    style="background-color:#cec0aae0; border:var(--bottle-color) 2px solid" method="POST"
                    enctype="multipart/form-data" action="{{ route('review.store') }}">
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
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control search_" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input name="surname" type="text" class="form-control search_" id="surname">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Breve</label>
                        <input name="message" type="text" class="form-control search_" id="message">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Commento</label>
                        <textarea name="body" class="form-control search_" id="body" cols="30" rows="10"></textarea>
                    </div>
                    <div class="justify-content-around d-flex">
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3 fs-5">
                                <input class="form-check-input search_" type="radio" name="gender" value="M"
                                    id="men">
                                <label class="form-check-label" for="men">
                                    M
                                </label>
                            </div>
                            <div class="form-check fs-5">
                                <input class="form-check-input search_" type="radio" name="gender" value="F"
                                    id="women">
                                <label class="form-check-label" for="women">
                                    F
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn bg_green px-4 py-1 "><i
                                class="bi bi-arrow-right text-white fs-4"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>

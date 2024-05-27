<div>
    <div class="container vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="text-center pb-5">La Wishlist di {{ Auth::user()->name }}!</h2>
                <div class="table-responsive mx-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Titolo</th>
                                <th>Prezzo</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td><img src="{{ Storage::url($article->img) }}" alt="" width="40px"></td>
                                    <td>{{ $article->title }}</td>
                                    <td>€ {{ $article->price }}</td>
                                    <td><button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
                                            data-bs-target="#article{{ $article->id }}">
                                            <i class="bi bi-info-circle-fill fs-4 tx-bottle"></i>
                                        </button></td>
                                    <td>
                                        <button wire:click="removeFromWishlist({{ $article->id }})"
                                            class="border-0 bg-transparent"><i class="bi bi-x-circle-fill fs-4 text-danger"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade sfondo" id="article{{ $article->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 tx-bottle" id="exampleModalLabel">
                                                    {{ $article->title }}</h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12 d-flex justify-content-center ">
                                                    <img src="{{ Storage::url($article->img) }}" alt=""
                                                        class="">
                                                </div>
                                                <div class="col-12 pt-1">
                                                    <h4 class="my-3 fs-5 ">{{ $article->description }}</h4>
                                                    <h5 class="mt-5 mb-3 font-tit fs-4 tx-bottle fw-bold">
                                                        {{ $article->subtitle }}</h5>
                                                    <p class="my-3 lead" style="white-space: pre-wrap;">
                                                        {{ $article->body }}</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="mx-auto py-2 px-4 button_"
                                                    data-bs-dismiss="modal">Chiudi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

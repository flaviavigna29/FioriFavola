<div>
    <div class="container vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-12">
                <h2 class="text-center pb-5">La Wishlist di {{ Auth::user()->name }}!</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Titolo</th>
                                <th>Descrizione</th>
                                <th>Prezzo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->description }}</td>
                                    <td>€{{ $article->price }}</td>
                                    <td>
                                        <button wire:click="removeFromWishlist({{ $article->id }})"
                                            class="btn btn-danger">Rimuovi</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

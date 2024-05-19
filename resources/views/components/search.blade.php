<div class="search_mobile">
    <a class="tx-bottle d-flex justify-content-center align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#SearchModal">
        <i class="bi bi-search-heart fs-3 px-3"></i>
    </a>
</div>

<!-- Search Modale -->
<div class="modal fade" id="SearchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0 ">
            <div class="px-md-5 py-3">
                <!-- Form di ricerca -->
                <form action="{{ route('article.search') }}" method="GET" role="search" class="d-flex">
                    <input name="searched" type="search" class="form-control search_ w-100"
                        placeholder='es. "Kenzia, "Venus Flytrap", ...' aria-label="Search"
                        aria-describedby="basic-addon1">
                    <button type="submit" class="btn btn-search ms-2">Cerca</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fine Search Modale -->

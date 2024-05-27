<div>
    <div class="dropdown-center">
        <button class="btn btn-article dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ordina per:
        </button>
        <ul class="dropdown-menu">
            <li><button type="button" wire:click="OrderByPriceAsc" class="dropdown-item">Prezzo più basso</button></li>
            <li><button type="button" wire:click="OrderByPriceDesc" class="dropdown-item">Prezzo
                    più alto</button></li>
            <li><button type="button" wire:click="OrderByTitleAsc" class="dropdown-item">Dalla A
                    alla Z</button></li>
            <li><button type="button" wire:click="OrderByTitleDesc" class="dropdown-item">Dalla Z
                    alla A</button>
            </li>
            <li><button type="button" wire:click="resetOrder" class="dropdown-item">Reset</button>
            </li>
        </ul>
    </div>
</div>

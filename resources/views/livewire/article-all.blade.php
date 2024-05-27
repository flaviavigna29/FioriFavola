<div class="row justify-content-around">
    <x-display-message />
    @foreach ($articles as $article)
        <div class="col-11 col-md-4 col-lg-3 mb-3">
            <x-card :$article />
        </div>
    @endforeach
</div>

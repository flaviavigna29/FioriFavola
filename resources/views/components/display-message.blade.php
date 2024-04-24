@if (session('message'))
    <div class="alert alert-success display_ mb-0 d-flex flex-column justify-content-center align-items-center">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger display_ p-0 mb-0 d-flex flex-column justify-content-center align-items-center">
    <ul class="my-1 ">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
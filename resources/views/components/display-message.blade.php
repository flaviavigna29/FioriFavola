@if (session('message'))
    <div class="row">
        <div id="flash-message"
            class="alert alert-success mb-0 d-flex flex-column justify-content-center align-items-center">
            {{ session('message') }}
        </div>
    </div>
@endif

@if (session('authorization'))
    <div id="flash-message"
        class="alert alert-danger mb-0 d-flex flex-column justify-content-center align-items-center">
        {{ session('authorization') }}
    </div>
@endif

{{-- <script>
    let message = document.querySelector('#flash-message')
    setTimeout(() => {
        message.remove()
    }, 4000);
</script> --}}

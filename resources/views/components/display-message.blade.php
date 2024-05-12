@if (session('message'))
    <div id="flash-message"
        class="alert alert-success display_ mb-0 d-flex flex-column justify-content-center align-items-center">
        {{ session('message') }}
    </div>
@endif

@if (session('authorization'))
    <div id="flash-message"
        class="alert alert-danger display_ mb-0 d-flex flex-column justify-content-center align-items-center">
        {{ session('authorization') }}
    </div>
@endif

<script>
    let message = document.querySelector('#flash-message')
    setTimeout(() => {
        message.remove()
    }, 7000);
</script>

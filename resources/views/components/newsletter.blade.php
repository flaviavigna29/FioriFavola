<div class="container py-3 h-100" id="newsletter" data-aos="zoom-in"
data-aos-delay="200" data-aos-duration="1000">

    <div class="row my-5 bg_green justify-content-center h-100 py-4 rounded-5">
        <div class="col-10 col-md-8 my-5 text-center text-white lead">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" class="mb-4"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M47.5 2.5 22.75 27.25M47.5 2.5l-15.75 45-9-20.25-20.25-9 45-15.75Z" stroke="#fff"
                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <h3 class="text-white fw-bold mb-5">Registrati alla nostra Newsletter!</h3>
            <form method="POST" action="{{route('newsletter')}}" class="my-3 d-flex">
                @csrf
                <input type="email" name="email" class="form-control py-3 mx-2 bg-transparent search_newsletter" id="email" value="{{old('email')}}"
                    placeholder="Inserisci la tua e-mail">
                <button class="btn btn-outline-light py-3 fw-bold mx-2 btn_newsletter"><small>Invia</small></button>
            </form>
            <div class="mt-4 text-center">
                <p><small>Rimani aggiornato sui nuovi prodotti e le nuove offerte.</small></p>
            </div>
        </div>
    </div>

</div>

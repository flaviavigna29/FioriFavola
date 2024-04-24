<x-layout>


    <!-- Articolo -->
    <article class="container-fluid mb-5 pb-5 block_contacts sfondo">

        <div class="mx-1 px-1 mx-md-5 px-md-5">
            <x-display-message />
            <div class="row justify-content-evenly">
                <!-- sezione contatti -->
                <div class="col-12 col-lg-5 bordo_contacts bg-white" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-delay="50" data-aos-duration="200" data-aos-offset="0">

                    <!-- contatti -->
                    <div class="mb-4">
                        <h4 class="font-tit mb-3">Contatti</h4>
                        <ul class="list-unstyled">

                            <li class="mb-2">
                                <a href="tel:+393314432962" class="text-decoration-none text-reset">
                                    <i class="bi bi-telephone-fill me-2"></i>
                                    <span>+39 331 443 2962</span>
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="mailto:info@fiorifavola.com" class="text-decoration-none text-reset">
                                    <i class="bi bi-envelope-open-heart-fill me-2"></i>
                                    <span>info@fiorifavola.com</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://maps.app.goo.gl/pTLGZJ3f85t4iphEA"
                                    class="text-decoration-none text-reset" target="_blank">
                                    <i class="bi bi-geo-alt-fill me-2"></i>
                                    <span>Via di San Francesco, 79 - 00061 Anguillara S. - RM</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- social media -->
                    <div class="mb-4">
                        <h4 class="font-tit mb-3">Social Media</h4>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="https://www.instagram.com/" class="text-decoration-none text-reset"
                                    target="_blank">
                                    <i class="bi bi-instagram me-2"></i>

                                </a>
                            </li>

                            <li class="mx-2">
                                <a href="https://www.facebook.com/" class="text-decoration-none text-reset"
                                    target="_blank">
                                    <i class="bi bi-facebook me-2"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://wa.me/+393314432962" class="text-decoration-none text-reset"
                                    target="_blank">
                                    <i class="bi bi-whatsapp me-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- form -->
                    <form method="POST" action="{{ route('submit') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h4 class="font-tit mb-3">Scrivici un messaggio</h4>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger p-0 my-2">
                                    <ul class="my-1 ">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col my-2">
                                <input name="name" class="form-control search_" value="{{ old('name') }}" type="text"
                                    placeholder="Nome">
                            </div>
                            <div class="col my-2">
                                <input name="surname" class="form-control search_" type="text" value="{{ old('surname') }}"
                                    placeholder="Cognome">
                            </div>

                            <div class=" my-2">
                                <input name="email" class="form-control search_" type="email" value="{{ old('email') }}"
                                    placeholder="email">
                            </div>

                            <div class="col-12 my-2">
                                <label for="exampleFormControlTextarea1">Inserisci il testo</label>
                                <textarea name="message" class="form-control search_" id="exampleFormControlTextarea1" rows="3">{{ old('message') }}</textarea>

                            </div>
                            <div class="my-2 ">
                                <button class="form-control text-black button_contacts">Invia il messaggio</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- mappa -->
                <div class="d-none d-lg-block col-lg-5 justify-content-center align-items-center text-center"
                    data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-duration="200"
                    data-aos-offset="0">
                    <iframe class="iframe mappa"
                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d9958.597307069344!2d12.270075578602107!3d42.09229061044421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e2!4m0!4m3!3m2!1d42.0891362!2d12.272125599999999!5e0!3m2!1sit!2sit!4v1710969637218!5m2!1sit!2sit"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </article>
    <!-- Fine Articolo -->
</x-layout>

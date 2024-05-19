<!-- Footer -->
<footer class="container-fluid pt-3 borderFooter">
    <div class="mx-0 mx-md-3 mx-lg-5 px-3 px-md-5">
        <div class="row d-flex justify-content-center ">
            <!-- colonna contatti -->
            <div class="col-12 col-lg-5 px-1 mt-3 order-lg-2">
                <h4 class="mb-4 font-tit text-center">Contatti</h4>
                <ul class="list-unstyled d-flex justify-content-evenly">
                    <div class="col-6 col-lg-6">
                        <li class="my-2">
                            <a href="https://maps.app.goo.gl/pTLGZJ3f85t4iphEA" class="text-decoration-none text-reset"
                                target="_blank">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                <span class="text-footer">Via di S. Francesco, 79 - Anguillara S. - RM</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="tel:+393314432962" class="text-decoration-none text-reset">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <span class="text-footer">+39 331 443 2962</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="mailto:info@fiorifavola.com" class="text-decoration-none text-reset">
                                <i class="bi bi-envelope-open-heart-fill me-2"></i>
                                <span class="text-footer">info@fiorifavola.com</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-4 col-lg-3">
                        <li class="my-2">
                            <a href="{{route('review.review')}}#newsletter" class="text-decoration-none text-reset">
                                <i class="bi bi-flower1 me-2"></i>
                                <span class="text-footer">Newsletter</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="{{route('review.create')}}" class="text-decoration-none text-reset">
                                <i class="bi bi-flower1 me-2"></i>
                                <span class="text-footer">Recensioni</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
                <!-- colonna chi siamo -->
                <div class="col-8 col-md-7 col-lg-2 px-1 mt-3 order-lg-1 ">
                    <h4 class="mb-4 font-tit">Chi siamo</h4>
                    <ul class="list-unstyled">
                        <li class="my-2">
                            <a href="{{ route('storia') }}" class="text-decoration-none text-reset">
                                <i class="bi bi-flower1 me-2"></i>
                                <span class="text-footer">La nostra storia</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="{{ route('contatti') }}" class="text-decoration-none text-reset">
                                <i class="bi bi-flower1 me-2"></i>
                                <span class="text-footer">Contattaci</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- colonna Social Media -->
                <div class="col-4 col-md-4 col-lg-2 px-1 mt-3 order-lg-3 ">
                    <h4 class="mb-4 font-tit">Social</h4>
                    <ul class="list-unstyled">
                        <li class="my-2">
                            <a href="https://www.instagram.com/" class="text-decoration-none text-reset"
                                target="_blank">
                                <i class="bi bi-instagram me-2"></i>
                                <span class="text-footer">Instagram</span>
                            </a>
                        </li>

                        <li class="my-2">
                            <a href="https://www.facebook.com/" class="text-decoration-none text-reset" target="_blank">
                                <i class="bi bi-facebook me-2"></i>
                                <span class="text-footer">Facebook</span>
                            </a>
                        </li>

                        <li class="my-2">
                            <a href="https://wa.me/+393314432962" class="text-decoration-none text-reset"
                                target="_blank">
                                <i class="bi bi-whatsapp me-2"></i>
                                <span class="text-footer">Whatsapp</span>
                            </a>
                        </li>
                    </ul>
                </div>


        </div>
        <!-- Copyright -->
        <div class="row mt-3">
            <p class="text-center text-footer">© 2024 - Fiori Favola</p>
        </div>
    </div>
</footer>
<!--Fine Footer -->

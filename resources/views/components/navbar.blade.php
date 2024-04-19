  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top nav-scrolled transition mx-0 px-0 px-md-5"
      aria-label="Eighth navbar example">
      <div class="container-fluid p-0">
          <!-- Logo della navbar -->
          <a class="navbar-brand" href="{{route('home')}}">
              <img src="media/logo/logo-removebg-preview.png" class="navbar_logo">
          </a>
          <!-- Bottone del collasso modalità mobile -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
              aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
              <img src="media/assets/icons8-foglia-40.png" alt="">
          </button>
          <!-- Contenuto della navbar -->
          <div class="collapse navbar-collapse p-2 bg_navbar" id="navbarsExample07">
              <ul class="navbar-nav me-auto mb-3 mb-md-3 mb-lg-0">
                  <!-- Elemento del menu: Catalogo -->
                  <li class="nav-item me-md-5 my-1 my-lg-0">
                      <a class="nav-link navbar_border_text" aria-current="page" href="#">Catalogo</a>
                  </li>
                  <!-- Elemento del menu: Categorie -->
                  <li class="nav-item me-md-5 my-1 my-lg-0 dropdown">
                      <a class="nav-link dropdown-toggle navbar_border_text" href="#" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Cura delle Piante
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item font-tit" href="#">Cura e Difesa</a></li>
                          <li><a class="dropdown-item font-tit" href="#">Nutrizione e Bellezza</a></li>
                          <li><a class="dropdown-item font-tit" href="#">Terricci e Substrati</a></li>
                          <li><a class="dropdown-item font-tit" href="#">Strumenti e attrezzi</a></li>
                      </ul>
                  </li>
                  <!-- Elemento del menu: Contatti -->
                  <li class="nav-item me-md-5 my-1 my-lg-0 ">
                      <a class="nav-link navbar_border_text" href="{{route ('contatti')}}">Contatti</a>
                  </li>
              </ul>
              <!-- Form di ricerca -->
              <div class="input-group me-md-5 my-1 my-lg-0">
                  <span class="input-group-text search_">
                      <img width="20" height="20" src="https://img.icons8.com/ios/50/search-for-love--v1.png"
                          alt="search-for-love--v1 Search Icon" />
                  </span>
                  <input type="text" class="form-control search_" placeholder="Search" aria-label="Search"
                      aria-describedby="basic-addon1">
              </div>
              <!-- Icone carrello e accedi-->
              <div class="fs-4 tx-bottle my-3 my-lg-0 d-flex mx-auto">
                  <i class="bi bi-bag-heart-fill me-5 me-md-3"></i>
                  <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="bi bi-person-hearts tx-bottle"></i>
                  </button>
              </div>

          </div>
      </div>
  </nav>
  <!-- Fine Navbar -->

  <!-- Accedi Modale -->
  <div class="modal fade sfondo" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content bordo_contacts">
              <div class="modal-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-12 text-center">
                              <p class="h3 font-dosis tx-bottle fw-bold">Accedi</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <form>
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label small">Email address</label>
                                      <input type="email" class="form-control search_" id="exampleInputEmail1"
                                          aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label small">Password</label>
                                      <input type="password" class="form-control search_" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label small" for="exampleCheck1">Ricorda la
                                          password</label>
                                  </div>
                                  <button type="submit" class="d-block mx-auto py-2 px-4 button_">Submit</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Fine Accedi Modale -->

  <!-- JS NAVBAR -->
  <script>
      // EVENTO SCROLL NAVBAR
      let navbar = document.querySelector(".navbar")

      window.addEventListener("scroll", () => {
          if (window.scrollY > 0) {
              navbar.classList.add("nav-scrolled")
          } else {
              navbar.classList.remove("nav-scrolled")
          }
      })
  </script>
  <!-- FINE JS NAVBAR -->

console.log('ciao');

// ULTIMI ARTICOLI
fetch("../json/pippo.json")
    .then(response => response.json())   
    .then(data => {
       
        let swiperWrapper = document.querySelector(".swiper-wrapper");

        function createCards(array) {
            swiperWrapper.textContent = "";

            array.forEach((articolo, i) => {
                if (i >= array.length - 6) {

                    
                    let swiperSlide = document.createElement("div");
                    swiperSlide.classList.add("swiper-slide", "col-12", "col-md-4", "col-lg-4");
                    swiperSlide.innerHTML = `
                    <div class="cardArticles h-100 bg-white position-relative">
                    <div class="overflow-hidden">
                    <img src="${articolo.img}" class="img-card card-img-top" alt="...">
                    <i id="heart-${articolo.id}" class="bi bi-heart-fill fs-3 position-absolute heart tx-bottle"></i>
                    </div>
                        <div class="card-body d-flex flex-column mx-1">
                        <div> 
                            <h4 class="card-title text-center text-truncate my-2">${articolo.nome}</h4>
                            <p class="card-text mb-1">Categoria: <span class="fw-bold">${articolo.categoria}</span></p>
                            <p class="card-text mb-2">Prezzo: <span class="fw-bold">${articolo.prezzo}</span>€</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between tx-bottle">
                            <i class="bi bi-info-circle-fill fs-4 tx-bottle text-center"></i>
                            <i class="bi bi-bag-heart-fill fs-4"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    `;
                    swiperWrapper.appendChild(swiperSlide);
                }
            });

            
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 20,
                freeMode: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        }

        createCards(data);

    });


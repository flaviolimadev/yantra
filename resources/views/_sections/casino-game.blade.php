<div class="area-jogos-cassino">
    <div class="header-cassino">
        <img src="{{ asset('assets/icones/icone_yantra.png  ') }} " alt="Cassino" width="80px">
        <span>Games</span>
    </div>

    <div class="banners-carrossel cassino">
        <article class="c-carousel c-carousel--responsive">
            <div class="c-carousel__slides js-carousel--responsive1">
                <article class="c-carousel__slide">
                    <a href="#" class="item-cassino">
                        <img src="{{ asset('http://127.0.0.1:8000/assets/banners/banner_yantra.png') }} " alt="Jogo do Cassino">
                        <div>
                            <span class="title-jogocassino">Yantra Casino</span>
                            <span class="subtitle-jogocassino">Yantra Gaming</span>
                        </div>
                    </a>
                </article>

                <article class="c-carousel__slide">
                    <a href="#" class="item-cassino">
                        <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSYLQd5BA_u6QP7ZD5o27pAN_z7GSLvOouig&usqp=CAU') }} " alt="Jogo do Cassino">
                        <div>
                            <span class="title-jogocassino">Aviator</span>
                            <span class="subtitle-jogocassino">Evolution Gaming</span>
                        </div>
                    </a>
                </article>

                
            </div>
            
            <div class="area-buttons">
                <button class="js-carousel--responsive-prev1 carousel-control-prev-icon prev" aria-label="Anterior"></button>
                <button class="js-carousel--responsive-next1 carousel-control-next-icon next" aria-label="Próximo"></button>  
            </div>
        </article> 
    </div>
    
    
</div>

<script type="text/javascript"> 

        const $responsiveCarousel1 = document.querySelector(".js-carousel--responsive1");

        new Glider($responsiveCarousel1, {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        duration: 0.25,
        dots: ".js-carousel--responsive-dots1",
        arrows: {
            prev: ".js-carousel--responsive-prev1",
            next: ".js-carousel--responsive-next1",
        },
        responsive: [
            {
            breakpoint: 300,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            },
            },
            {
            breakpoint: 900,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            },
            },
        ],
        });

       
</script> 
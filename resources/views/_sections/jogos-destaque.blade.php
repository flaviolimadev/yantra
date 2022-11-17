<div class="banners-carrossel roletas">
    <article class="c-carousel c-carousel--responsive">
        <div class="c-carousel__slides js-carousel--responsive">
            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_yantra.png') }} " alt="Banner yantra" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_monopoly.png') }} " alt="Banner monopoly" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_dream_catcher.png') }} " alt="Banner dream catcher" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_crazy_time.png') }} " alt="Banner crazy time" width="100%">
                </a>
            </article> 

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_yantra.png') }} " alt="Banner yantra" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_monopoly.png') }} " alt="Banner monopoly" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_dream_catcher.png') }} " alt="Banner dream catcher" width="100%">
                </a>
            </article>

            <article class="c-carousel__slide">
                <a href="#" class="item-minicarrossel">
                    <img src="{{ asset('assets/banners/banner_crazy_time.png') }} " alt="Banner crazy time" width="100%">
                </a>
            </article>
        </div>
    
        <div class="area-buttons">
            <button class="js-carousel--responsive-prev carousel-control-prev-icon prev" aria-label="Anterior"></button>
            <button class="js-carousel--responsive-next carousel-control-next-icon next" aria-label="Próximo"></button>  
        </div>
    </article> 
</div>

<script type="text/javascript">
        const $responsiveCarousel = document.querySelector(".js-carousel--responsive");

        new Glider($responsiveCarousel, {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        duration: 0.25,
        dots: ".js-carousel--responsive-dots",
        arrows: {
            prev: ".js-carousel--responsive-prev",
            next: ".js-carousel--responsive-next",
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
                slidesToShow: 4,
                slidesToScroll: 1,
            },
            },
        ],
        });
</script>
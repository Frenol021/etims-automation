//import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination, EffectFade } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.hero-slider', {
        modules: [Autoplay, Pagination, EffectFade],

        loop: true,

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },

        effect: 'fade',

        speed: 600,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});




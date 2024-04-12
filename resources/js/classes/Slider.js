import Swiper, {
    Navigation, Pagination, Thumbs, EffectFade, Autoplay, FreeMode, EffectCube
} from 'swiper';

Swiper.use([Navigation, Pagination, Thumbs, EffectFade, EffectCube, Autoplay, FreeMode]);

let sliders = []

class Slider {
    static refresh() {
        if (sliders) {
            sliders.forEach(slider => slider.destroy())
        }

        Slider.init()
    }

    static init() {
        // Added class for splide slides
        if (document.querySelectorAll('.swiper-wrapper')) {
            document.querySelectorAll('.swiper-wrapper > *')
                .forEach(slide =>
                    slide.classList.add('swiper-slide')
                )
        }

        // Главный экран
        const offer = document.querySelector('[data-offer]')
        if (offer) {
            this.createSlider(offer, {
                slidesPerView: 1,
                spaceBetween: 0,
                allowTouchMove: false,
                loop: true,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                    pauseOnMouseEnter: false
                }
            })
        }

        // Шаги
        const stages = document.querySelector('[data-stages]')
        if (stages) {
            this.createSlider(stages, {
                slidesPerView: 1.2,
                spaceBetween: 10,
                autoWidth: true,
                freeMode: true,
                mousewheel: true,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        autoWidth: false,
                        spaceBetween: 10
                    }
                }
            })
        }

        const clients = document.querySelector('[data-clients]')
        if (clients) {
            this.createSlider(clients, {
                slidesPerView: 3,
                spaceBetween: 7,
                allowTouchMove: false,
                loop: true,
                autoHeight: false,
                calculateHeight: false,
                speed: 1000,
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 7,
                        spaceBetween: 90
                    }
                }
            })
        }
    }

    static createSlider(parent, options) {
        const box = parent
        const swiper = box.querySelector('.swiper')

        // Arrows
        const prev_arrow = box.querySelector('.slider__arrow--prev')
        const next_arrow = box.querySelector('.slider__arrow--next')

        if (prev_arrow || next_arrow) {
            options.navigation = {
                prevEl: prev_arrow ? prev_arrow : null,
                nextEl: next_arrow ? next_arrow : null,
            }
        }

        // Dotted
        const dotted = box.querySelector('.dotted')

        if (dotted) {
            options.pagination = {
                el: dotted,
                type:'bullets',
                clickable: true
            }
        }

        // Индикаторы
        const indicator = box.querySelector('.slider-indicator')

        if (indicator) {
            options.pagination = {
                el: indicator,
                type:'fraction',
            }
        }

        let slider = new Swiper(swiper, options)

        sliders.push(slider)

        return slider
    }
}

document.addEventListener('DOMContentLoaded', () => {
    Slider.init()
})
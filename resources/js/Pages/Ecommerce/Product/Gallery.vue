<template>
    <div class="col-xl-5" v-if="product.media.length">
        <div class="row">
            <div class="col-md-2">
                <Swiper
                    :loop="true"
                    :freeMode="true"
                    :spaceBetween="6"
                    :slidesPerView="5"
                    :centeredSlides="true"
                    :direction="'vertical'"
                    :slideToClickedSlide="true"
                    :watchSlidesProgress="true"
                    @swiper="setThumbsSwiper"
                    style="height: 435px;overflow: hidden;"
                >
                    <SwiperSlide v-for="(media, index) in product.media" :key="index">
                        <img :src="media.url" />
                    </SwiperSlide>
                </Swiper>
            </div>

            <div class="col-md-10 pe-xl-0 main-slider-col" v-if="thumbnails">
                <Swiper
                    :loop="true"
                    :spaceBetween="10"
                    :navigation="true"
                    :thumbs="{ swiper: thumbnails }"
                >
                    <SwiperSlide v-for="(media, index) in product.media" :key="index">
                        <img :src="media.url" />
                    </SwiperSlide>
                </Swiper>
            </div>
        </div>
    </div>
</template>
<script setup>
// Import Swiper styles
import 'swiper/css';

import "swiper/css/thumbs"
import "swiper/css/free-mode"
import "swiper/css/navigation"


import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
// import Swiper core and required modules
import SwiperCore, { FreeMode, Navigation, Thumbs } from 'swiper';


// install Swiper modules
SwiperCore.use([FreeMode, Navigation,]);

const props = defineProps({ product: Object })
const thumbnails = ref(null)

function setThumbsSwiper(swiper) {
    thumbnails.value = swiper;
}

</script>

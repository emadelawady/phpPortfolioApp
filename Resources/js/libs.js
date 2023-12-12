import 'flowbite';
import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'

// import collapse
import collapse from '@alpinejs/collapse'
 //init collapse
 Alpine.plugin(collapse)
 
window.Alpine = Alpine
 
Alpine.plugin(persist)

Alpine.start()

 

// core version + navigation, pagination modules:
import Swiper from 'swiper';

import { Navigation, Pagination, Scrollbar } from 'swiper/modules';

// import Swiper and modules styles

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';


import 'flowbite/dist/flowbite.min';



var swiper = new Swiper(".mySwiper", {
  modules: [Navigation, Pagination, Scrollbar],
  slidesPerView: 1,
  spaceBetween: 10,
  freeMode: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    }
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
    // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});



var swip = new Swiper(".mSwiper", {
  modules: [Navigation, Pagination, Scrollbar],
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});



// const swiper = new Swiper('.swiper', {

//     modules: [Navigation, Pagination, Scrollbar],

//     // Optional parameters
//     //direction: 'vertical',
//     loop: true,
  
//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },
  
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
  
//     // And if we need scrollbar
//     scrollbar: {
//       el: '.swiper-scrollbar',
//     },
//   });


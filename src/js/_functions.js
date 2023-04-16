// Данный файл - лишь собрание подключений готовых компонентов.
// Рекомендуется создавать отдельный файл в папке components и подключать все там

// Определение операционной системы на мобильных
import { mobileCheck } from "./functions/mobile-check";
console.log(mobileCheck())

// Определение ширины экрана
// import { isMobile, isTablet, isDesktop } from './functions/check-viewport';
// if (isDesktop()) {
//   console.log('...')
// }

// Троттлинг функции (для ресайза, ввода в инпут, скролла и т.д.)
// import { throttle } from './functions/throttle';
// let yourFunc = () => { console.log('throttle') };
// let func = throttle(yourFunc);
// window.addEventListener('resize', func);

// Фикс фулскрин-блоков
// import './functions/fix-fullheight';

// Реализация бургер-меню
import { burger } from './functions/burger';

// Реализация остановки скролла (не забудьте вызвать функцию)
// import { disableScroll } from './functions/disable-scroll';

// Реализация включения скролла (не забудьте вызвать функцию)
// import { enableScroll } from './functions/enable-scroll';

// Реализация модального окна
// import GraphModal from 'graph-modal';
// const modal = new GraphModal();

// Реализация табов
// import GraphTabs from 'graph-tabs';
// const tabs = new GraphTabs('tab');

// Получение высоты шапки сайта (не забудьте вызвать функцию)
// import { getHeaderHeight } from './functions/header-height';

// Подключение плагина кастом-скролла
// import 'simplebar';

// Подключение плагина для позиционирования тултипов
// import { createPopper, right} from '@popperjs/core';
// createPopper(el, tooltip, {
//   placement: 'right'
// });

import PhotoSwipeLightbox from "photoswipe/lightbox";


const cert = new PhotoSwipeLightbox({
  gallery: ".swiper-wrapper",
  children: "a",
  pswpModule: () => import("photoswipe")
});

cert.init();

// Подключение свайпера
// let menu = ['Специальные технические условия\n' +
// '(СТУ)', 'Огнезащита', 'Расчет рисков', 'Мероприятия по обеспечинию\n' +
// 'пожарной безопасности']

import Swiper, { Navigation, Pagination,Autoplay } from 'swiper';
Swiper.use([Navigation, Pagination, Autoplay]);
const swiper = new Swiper('.slider', {
  // slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
const swiperAbout = new Swiper('.cert__slider', {
  slidesPerView: 1.8,
  centeredSlides: true,
  spaceBetween: 20,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // // when window width is >= 320px
    768: {
      slidesPerView: 3,
      centeredSlides: false,
      spaceBetween: 30,
    },
  }
});
const swiperPortfolio = new Swiper('.slider__portfolio', {
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
    slidesPerView: 1.3,
    spaceBetween: 30,
  },
  breakpoints: {
    // // when window width is >= 320px
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1023: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 30,
      direction: 'horizontal',
    },
    // when window width is >= 640px
    1440: {
      direction: "vertical",
      slidesPerView: 2,
      spaceBetween: 10,
    }
  }
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
});
const swiperClients = new Swiper('.clients__slider', {
  slidesPerView: 3.5,
  spaceBetween: 50,
  loop: true,
  autoplay: {
    delay: 1000,
  },
  breakpoints: {
    // // when window width is >= 320px
    1023: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
    // when window width is >= 640px
    1440: {
      slidesPerView: 10.5,
    }
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
});
const swiperReviews = new Swiper('.reviews__slider', {
  slidesPerView: 1.4,
  spaceBetween: 50,
  centeredSlides: true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // // when window width is >= 320px
    1023: {
      slidesPerView: 5.8,
      spaceBetween: 20,
      centeredSlides: false,

    },
  }
});

// import styles bundle

// Подключение анимаций по скроллу
// import AOS from 'aos';
// AOS.init();

// Подключение параллакса блоков при скролле
// import Rellax from 'rellax';
// const rellax = new Rellax('.rellax');

// Подключение плавной прокрутки к якорям
// import SmoothScroll from 'smooth-scroll';
// const scroll = new SmoothScroll('a[href*="#"]');

// Подключение событий свайпа на мобильных
// import 'swiped-events';
// document.addEventListener('swiped', function(e) {
//   console.log(e.target);
//   console.log(e.detail);
//   console.log(e.detail.dir);
// });

// import { validateForms } from './functions/validate-forms';
// const rules1 = [...];

// const afterForm = () => {
//   console.log('Произошла отправка, тут можно писать любые действия');
// };

const header = document.querySelector('header');
let prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', function() {
  const currentScrollPos = window.pageYOffset;
  if (prevScrollPos < 10) {
    header.classList.remove('sticky');
  } else {
    header.classList.add('sticky');
  }
  prevScrollPos = currentScrollPos;
});

// validateForms('.form-1', rules1, afterForm);

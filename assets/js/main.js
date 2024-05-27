const ready = callback => {
  if (document.readyState != 'loading') callback();
  else document.addEventListener('DOMContentLoaded', callback);
};

let initLibs = false;
let instagramLoaded = false;

ready(() => {
  effects();
  pageScroll();
  initDario();
  onChangeSelect();
  initSwalle('.gallery-image');
  filterElements(
    '.fullgallery-cat__filter',
    '.fullgallery-main li',
    'fullgallery-cat__filter--active'
  );

  new Caos({
    disableMobile: true,
    duration: 3000,
    offset: 0,
    easing: 'cubic-bezier(0.19, 1, 0.22, 1)',
  });
});

function loadScriptFunction() {
  if (!initLibs) {
    initLibs = true;
    loadScript(srcJS, () => {
      slideLighbox();
      swiperGallery();
      initLazyLoading();
    });
  }
}

window.addEventListener('scroll', () => {
  pageScroll();
  loadScriptFunction();

  if (!instagramLoaded && getEl('.box-instagram')) {
    instagramLoaded = true;
    let script = document.createElement('script');
    script.src = 'https://static.elfsight.com/platform/platform.js';
    script.defer = true;
    script.setAttribute('data-use-service-core', '');
    getEl('.box-instagram').append(script);
  }
});

window.addEventListener('load', function () {
  initLazyLoading();
});

function initDario() {
  new Dario('#calendario', {
    range: true,
    lang: getEl('#lang').value,
    showSelected: true,
    onSelect(dario) {
      getEl('.qr-d-in').textContent = dario.startDate.fullDate;
      getEl('.qr-m-in').textContent = dario.startMonthShort;
      getEl('.qr-y-in').textContent = dario.startDate.year;
      getEl('.qr-d-out').textContent = dario.endDate.fullDate;
      getEl('.qr-m-out').textContent = dario.endMonthShort;
      getEl('.qr-y-out').textContent = dario.endDate.year;
      getEl('#gg').value = dario.startDate.fullDate;
      getEl('#mm').value = dario.startDate.fullMonth;
      getEl('#aa').value = dario.startDate.year;
      getEl('#notti_1').value = dario.nights;
    },
  });
}

function onChangeSelect() {
  // Cambio valore select
  getAll('.qr-select:not(#struttura)').forEach(select => {
    select.addEventListener('change', () => {
      let { text } = select.options[select.selectedIndex].dataset;
      let { value } = select.options[select.selectedIndex];
      getEl('.qr-label__number', select.parentElement).textContent = value;
      getEl('.qr-label__text', select.parentElement).textContent = text;
    });
  });
}

function swiperGallery() {
  new Swiper('.minigallery-slider', {
    speed: 1000,
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    slidesPerView: 'auto',
    spaceBetween: 25,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.minigallery .arrow',
    },
    on: {
      click() {
        const swiper = this;
        let { clickedIndex: clicked } = swiper;
        let { swiperSlideIndex: index } = swiper.slides[clicked].dataset;
        openSlideLightbox(index);
      },
    },
  });

  new Swiper('.box-offers-slider', {
    speed: 1000,
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    slidesPerView: 2,
    spaceBetween: 25,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.box-offers-pagination',
      bulletClass: 'box-offers-pagination__item',
      bulletActiveClass: 'box-offers-pagination__item--active',
      clickable: true,
    },
  });
}

function effects() {
  // VARS
  let hamburger = getAll('.hamburger');
  let menu = getEl('.menu');
  let book = getAll('.header-book:not(.header-book--link)');
  let qr = getEl('.qr');

  hamburger.forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('hamburger--open');
      menu.classList.toggle('menu--open');
      qr.classList.remove('qr--open');
      book.forEach(item => item.classList.remove('header-book--open'));
    });
  });

  book.forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('header-book--open');
      qr.classList.toggle('qr--open');
      menu.classList.remove('menu--open');
      hamburger.forEach(item => item.classList.remove('hamburger--open'));
    });
  });

  // Apertura menu secondo livello
  openMenuList();

  // Video Event
  handleVideo();

  // Append arrow to breadcrumb
  let breadcrumb = getAll('.breadcrumb li:not(:last-child)');
  breadcrumb.forEach(item => {
    item.innerHTML += '<i class="fa-thin fa-arrow-right icon"></i>';
  });
}

function openMenuList() {
  const menuArrows = getAll('.menu-arrow');

  menuArrows.forEach(arrow => {
    arrow.addEventListener('click', () => {
      if (arrow.classList.contains('menu-arrow--open')) {
        removeActiveClass();
      } else {
        removeActiveClass();
        toggleMenu(arrow);
      }
    });
  });

  function toggleMenu(arrow) {
    arrow.classList.toggle('menu-arrow--open');
    arrow.nextElementSibling.classList.toggle('menu-child--open');
  }

  function removeActiveClass() {
    menuArrows.forEach(menuArrow => {
      menuArrow.classList.remove('menu-arrow--open');
      menuArrow.nextElementSibling.classList.remove('menu-child--open');
    });
  }
}

// Filter function reusable
function filterElements(filterSelector, itemSelector, activeClass, hiddenClass = 'hidden') {
  const filters = getAll(filterSelector);
  const items = getAll(itemSelector);

  filters.forEach(filter => {
    filter.addEventListener('click', function () {
      let activeFilter = getEl(`${filterSelector}.${activeClass}`);
      if (activeFilter) {
        activeFilter.classList.remove(activeClass);
      }
      this.classList.add(activeClass);

      let filterValue = this.getAttribute('data-filter');
      items.forEach(item => {
        if (filterValue === 'all') {
          item.classList.remove(hiddenClass);
        } else if (!item.dataset.category.includes(filterValue)) {
          item.classList.add(hiddenClass);
        } else {
          item.classList.remove(hiddenClass);
        }
      });
    });
  });
}

let lightbox;

function slideLighbox() {
  lightbox = new FsLightbox();
  const slides = getAll('.minigallery-light');
  const sources = [];

  slides.forEach(slide => {
    const { src } = slide.dataset;
    sources.push(src);
  });

  lightbox.props.sources = sources;
  lightbox.props.type = 'image';
}

function openSlideLightbox(current) {
  let i = parseInt(current);
  lightbox.open(i);
}

function loadScript(sources, callback) {
  let numLoaded = 0;

  sources.forEach(src => {
    const element = document.createElement('script');
    element.src = src;
    element.defer = true;
    document.body.appendChild(element);

    element.addEventListener('load', function () {
      numLoaded++;
      if (numLoaded === sources.length) callback();
    });
  });
}

// Lazy Loading
var lazyObserver = new IntersectionObserver((entries, observer) => {
  for (var i = 0; i < entries.length; i++) {
    if (entries[i].isIntersecting) {
      replaceLazySource(entries[i].target);
      lazyObserver.unobserve(entries[i].target);
    }
  }
});

function replaceLazySource(imgObj) {
  var dataSrc = imgObj.getAttribute('data-src');
  if (imgObj.tagName.toUpperCase() == 'IMG') {
    imgObj.src = dataSrc;
    imgObj.removeAttribute('data-src');
  } else if (imgObj.tagName.toUpperCase() == 'PICTURE') {
    var sources = imgObj.querySelectorAll('source');
    for (var i = 0; i < sources.length; i++) {
      sources[i].setAttribute('srcset', sources[i].getAttribute('data-src'));
      sources[i].removeAttribute('data-src');
    }
    var images = imgObj.querySelectorAll('img');
    for (var i = 0; i < images.length; i++) {
      images[i].setAttribute('src', images[i].getAttribute('data-src'));
      images[i].removeAttribute('data-src');
    }
  } else {
    var elementStyle = imgObj.getAttribute('style');
    if (elementStyle != null) {
      elementStyle =
        elementStyle.charAt(elementStyle.length - 1) == ';' ? elementStyle : ';' + elementStyle;
    } else {
      elementStyle = '';
    }
    imgObj.setAttribute('style', elementStyle + 'background-image: url(' + dataSrc + ');');
    imgObj.removeAttribute('data-src');
  }
  imgObj.className = imgObj.className.replace('lazy', 'lazied');
}

function initLazyLoading() {
  var lazyImages = [].slice.call(document.querySelectorAll('.lazy'));
  for (var i = 0; i < lazyImages.length; i++) {
    if ('IntersectionObserver' in window) {
      lazyObserver.observe(lazyImages[i]);
    } else {
      replaceLazySource(lazyImages[i]);
    }
  }
}

// Utils functions
function getEl(el, context = document) {
  return typeof el === 'string' ? context['querySelector'](el) : el;
}

function getAll(el, context = document) {
  return typeof el === 'string' ? context['querySelectorAll'](el) : el;
}

function addEvent(selector, event, callback) {
  let element = getEl(selector);
  if (element) {
    element.addEventListener(event, callback);
  }
}

function pageScroll(offset = 0, el = 'html') {
  if (window.scrollY > offset) {
    getEl(el).classList.add('scrolled');
  } else {
    getEl(el).classList.remove('scrolled');
  }
}

function handleVideo() {
  const video = getEl('video');

  addEvent('.gallery-video-audio', 'click', () => {
    getEl('.gallery-video-audio').classList.toggle('gallery-video-audio--active');
    checkMute();
  });

  addEvent('.gallery-video-controls', 'click', () => {
    getEl('.gallery-video-controls').classList.toggle('gallery-video-controls--active');
    playPause();
  });

  function playPause() {
    if (video.paused) video.play();
    else video.pause();
  }

  function checkMute() {
    if (video.muted) video.muted = false;
    else video.muted = true;
  }
}

function backgroundLazy() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll('.lazy-background'));

  if ('IntersectionObserver' in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function (lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
}

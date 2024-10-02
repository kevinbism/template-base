const ready = callback => {
  if (document.readyState !== 'loading') callback();
  else document.addEventListener('DOMContentLoaded', callback);
};

let initLibs = false;

ready(() => {
  effects();
  pageScroll();
  initDario();
  onChangeSelect();
  initSwalle('.gallery-image');
  filterElements('.gallery-page-cat__filter', '.gallery-page-item');

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
});

window.addEventListener('load', () => {
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
  const selects = getAll('.qr-select:not(#struttura)');

  for (const select of selects) {
    select.addEventListener('change', () => {
      const { text } = select.options[select.selectedIndex].dataset;
      const { value } = select.options[select.selectedIndex];
      getEl('.qr-label__number', select.parentElement).textContent = value;
      getEl('.qr-label__text', select.parentElement).textContent = text;
    });
  }
}

function swiperGallery() {
  new Swiper('.box-offers-slider', {
    speed: 1000,
    loop: true,
    spaceBetween: 87,
    slidesPerView: 'auto',
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });

  new Swiper('.minigallery-slider', {
    speed: 500,
    loop: true,
    effect: 'fade',
    allowTouchMove: false,
    autoplay: false,
    navigation: {
      prevEl: '.minigallery-arrow--prev',
      nextEl: '.minigallery-arrow--next',
    },
    on: {
      click() {
        const { clickedIndex: clicked } = this;
        const { swiperSlideIndex: index } = this.slides[clicked].dataset;
        openSlideLightbox(index);
      },
    },
  });
}

function effects() {
  // VARS
  const hamburgers = getAll('.hamburger');
  const menu = getEl('.menu');
  const books = getAll('.header-book');
  const qr = getEl('.qr');

  for (const hamburger of hamburgers) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('hamburger--open');
      menu.classList.toggle('menu--open');
      qr.classList.remove('qr--open');
      for (const book of books) book.classList.remove('header-book--open');
    });
  }

  for (const book of books) {
    book.addEventListener('click', () => {
      book.classList.toggle('header-book--open');
      qr.classList.toggle('qr--open');
      menu.classList.remove('menu--open');
      for (const hamburger of hamburgers) hamburger.classList.remove('hamburger--open');
    });
  }

  // Apertura menu secondo livello
  openMenuList();

  // Video Event
  handleVideo();

  // Click freccia home
  addEvent('.header-scroll', 'click', () => {
    window.scrollTo({
      top: getEl('.header').offsetHeight,
      behavior: 'smooth',
    });
  });

  // Event to scroll to top
  addEvent('.footer-up', 'click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
}

function openMenuList() {
  const menuArrows = getAll('.menu-arrow');

  for (const arrow of menuArrows) {
    arrow.addEventListener('click', () => {
      if (arrow.classList.contains('menu-arrow--open')) {
        removeActiveClass();
      } else {
        removeActiveClass();
        toggleMenu(arrow);
      }
    });
  }

  function toggleMenu(arrow) {
    arrow.classList.toggle('menu-arrow--open');
    arrow.nextElementSibling.classList.toggle('menu-child--open');
  }

  function removeActiveClass() {
    for (const menuArrow of menuArrows) {
      menuArrow.classList.remove('menu-arrow--open');
      menuArrow.nextElementSibling.classList.remove('menu-child--open');
    }
  }
}

// Filter function reusable
function filterElements(
  filterSelector,
  itemSelector,
  activeClass = 'active',
  hiddenClass = 'hidden'
) {
  const filters = getAll(filterSelector);
  const items = getAll(itemSelector);

  for (const filter of filters) {
    filter.addEventListener('click', function () {
      const activeFilter = getEl(`${filterSelector}.${activeClass}`);
      if (activeFilter) {
        activeFilter.classList.remove(activeClass);
      }
      this.classList.add(activeClass);

      const filterValue = this.getAttribute('data-filter');
      for (const item of items) {
        if (filterValue === 'all') {
          item.classList.remove(hiddenClass);
        } else if (!item.dataset.category.includes(filterValue)) {
          item.classList.add(hiddenClass);
        } else {
          item.classList.remove(hiddenClass);
        }
      }
    });
  }
}

// Filter multiselect
function filterMultiselect(
  filterSelector,
  itemSelector,
  activeClass = 'active',
  hiddenClass = 'hidden'
) {
  const filters = getAll(filterSelector);
  const items = getAll(itemSelector);

  for (const filter of filters) {
    filter.addEventListener('click', function () {
      this.classList.toggle(activeClass);

      const activeFilters = Array.from(filters)
        .filter(f => f.classList.contains(activeClass))
        .map(f => f.getAttribute('data-filter'));

      for (const item of items) {
        const itemCategories = item.getAttribute('data-category').split(' ');
        const isVisible =
          activeFilters.length === 0 ||
          activeFilters.some(filter => itemCategories.includes(filter));

        if (isVisible) {
          item.classList.remove(hiddenClass);
        } else {
          item.classList.add(hiddenClass);
        }
      }
    });
  }
}

let lightbox = null;

function slideLighbox() {
  lightbox = new FsLightbox();
  const slides = getAll('.minigallery-light');
  const sources = [];

  for (const slide of slides) {
    sources.push(slide.dataset.src);
  }

  lightbox.props.sources = sources;
  lightbox.props.type = 'image';
}

function openSlideLightbox(current) {
  lightbox.open(Number(current));
}

function loadScript(sources, callback) {
  let numLoaded = 0;

  for (const src of sources) {
    const element = document.createElement('script');
    element.src = src;
    element.defer = true;
    document.body.appendChild(element);

    element.addEventListener('load', () => {
      numLoaded++;
      if (numLoaded === sources.length) callback();
    });
  }
}

// Lazy Loading
const lazyObserver = new IntersectionObserver(entries => {
  for (let i = 0; i < entries.length; i++) {
    if (entries[i].isIntersecting) {
      replaceLazySource(entries[i].target);
      lazyObserver.unobserve(entries[i].target);
    }
  }
});

function replaceLazySource(imgObj) {
  const dataSrc = imgObj.getAttribute('data-src');
  if (imgObj.tagName.toUpperCase() === 'IMG') {
    imgObj.src = dataSrc;
    imgObj.removeAttribute('data-src');
  } else if (imgObj.tagName.toUpperCase() === 'PICTURE') {
    const sources = imgObj.querySelectorAll('source');
    for (let i = 0; i < sources.length; i++) {
      sources[i].setAttribute('srcset', sources[i].getAttribute('data-src'));
      sources[i].removeAttribute('data-src');
    }
    const images = imgObj.querySelectorAll('img');
    for (let i = 0; i < images.length; i++) {
      images[i].setAttribute('src', images[i].getAttribute('data-src'));
      images[i].removeAttribute('data-src');
    }
  } else {
    let elementStyle = imgObj.getAttribute('style');
    if (elementStyle != null) {
      elementStyle =
        elementStyle.charAt(elementStyle.length - 1) === ';' ? elementStyle : `${elementStyle};`;
    } else {
      elementStyle = '';
    }
    imgObj.setAttribute('style', `${elementStyle}background-image: url(${dataSrc});`);
    imgObj.removeAttribute('data-src');
  }
  imgObj.className = imgObj.className.replace('lazy', 'lazied');
}

function initLazyLoading() {
  const lazyImages = [].slice.call(document.querySelectorAll('.lazy'));
  for (let i = 0; i < lazyImages.length; i++) {
    if ('IntersectionObserver' in window) {
      lazyObserver.observe(lazyImages[i]);
    } else {
      replaceLazySource(lazyImages[i]);
    }
  }
}

// Utils functions
function getEl(el, context = document) {
  return typeof el === 'string' ? context.querySelector(el) : el;
}

function getAll(el, context = document) {
  return typeof el === 'string' ? context.querySelectorAll(el) : el;
}

function addEvent(selector, event, callback) {
  const element = getEl(selector);
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
  const lazyBackgrounds = [].slice.call(document.querySelectorAll('.lazy-background'));

  if ('IntersectionObserver' in window) {
    const lazyBackgroundObserver = new IntersectionObserver(entries => {
      for (const entry of entries) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          lazyBackgroundObserver.unobserve(entry.target);
        }
      }
    });

    for (const lazyBackground of lazyBackgrounds) {
      lazyBackgroundObserver.observe(lazyBackground);
    }
  }
}

(function () {
  jQuery('#hamburguer').on('click', function (e) {
    e.preventDefault();
    jQuery('main').addClass('blur');
    jQuery('.main-nav').addClass('open');
    jQuery('body').css('overflow', 'hidden');
  });

  jQuery('main').on('click', function (e) {
    if (jQuery('.main-nav').hasClass('open')) {
      e.preventDefault();
      jQuery('.main-nav').removeClass('open');
      jQuery('main').removeClass('blur');
      jQuery('body').css('overflow', 'initial');
    }
  });

  if (jQuery('.faqs .grid-item').length > 0) {
    jQuery('.faqs .grid-item').on('click', function (e) {
      e.preventDefault();
      let contenido = jQuery(this).find('.contenido');
      let plus = jQuery(this).find('.plus');
      let minus = jQuery(this).find('.minus');
      if (contenido.css('display') === 'none') {
        minus.show();
        plus.hide();
      } else {
        plus.show();
        minus.hide();
      }
      contenido.slideToggle();
    });
  }
  jQuery('.actions > a').on('click', function (e) {
    e.preventDefault();
    if (jQuery(this).attr('id') === 'expandir') {
      jQuery('.contenido').slideDown();
      jQuery('.plus').hide();
      jQuery('.minus').show();
    } else {
      jQuery('.contenido').slideUp();
      jQuery('.plus').show();
      jQuery('.minus').hide();
    }
  });

  if (jQuery('.jumbo-splide').length > 0) {
    var splide = new Splide('.jumbo-splide', {
      arrows: false,
      pagination: true,
      perPage: 1,
      perMove: 1,
      type: 'loop',
    });
    splide.mount();
  }

  window.addEventListener('scroll', () => {
    if (window.scrollY > 100 && window.innerWidth > 1024) {
      jQuery('.header').addClass('scrolled');
    } else {
      jQuery('.header').removeClass('scrolled');
    }
  });
})();

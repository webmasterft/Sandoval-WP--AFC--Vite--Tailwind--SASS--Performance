'use strict';

import toggleAvatarVisibility from './components/avatar-observer';
(function () {

// Check for avatar and invoke the function if it exists
if (document.getElementById("sandoval-avatar")) {
  toggleAvatarVisibility();
}






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

  window.addEventListener('scroll', () => {
    if (window.scrollY > 100 && window.innerWidth > 1024) {
      jQuery('.header').addClass('scrolled');
    } else {
      jQuery('.header').removeClass('scrolled');
    }
  });

  var checkDivInterval = setInterval(function () {
    if (jQuery('#info-form nf-field').length) {
      // Check if the div exists
      var divs = jQuery('#info-form nf-field');
      divs.slice(0, 5).wrapAll("<div class='left-panel'></div>");
      clearInterval(checkDivInterval); // Stop the interval once the div is found
    } else {
      console.log('Div not found, checking again...');
    }
  }, 2000);

  /* document.addEventListener('DOMContentLoaded', function () {
    // Select two containers for different forms
    let formContainers = [
      {
        container: document.querySelector('.ninja-form-container-1'),
        formId: 1,
      },
      {
        container: document.querySelector('.ninja-form-container-6'),
        formId: 6,
      },
    ];

    let observer = new IntersectionObserver(function (entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let formContainer = entry.target;
          let formId = formContainer.getAttribute('data-form-id');

          // Replace the container content with the corresponding Ninja Form shortcode
          formContainer.innerHTML = '[ninja_form id=' + formId + ']';
          observer.unobserve(entry.target); // Stop observing once the form is loaded
        }
      });
    });

    // Observe each container
    formContainers.forEach((formData) => {
      let { container, formId } = formData;
      if (container) {
        container.setAttribute('data-form-id', formId); // Set form ID dynamically
        observer.observe(container);
      }
    });
  }); */
})();

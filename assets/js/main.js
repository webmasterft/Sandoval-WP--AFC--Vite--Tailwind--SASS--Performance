function toggleAvatarVisibility() {
  const avatar = document.getElementById("sandoval-avatar");
  const footer = document.querySelector("footer");
  if (avatar && footer) {
    avatar.style.transition = "opacity 0.5s ease";
    avatar.style.opacity = "1";
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          avatar.style.opacity = "0";
        } else {
          avatar.style.opacity = "1";
        }
      });
    }, {
      root: null,
      rootMargin: "0px",
      threshold: 0
    });
    observer.observe(footer);
  }
}
(function() {
  if (document.getElementById("sandoval-avatar")) {
    toggleAvatarVisibility();
  }
  jQuery("#hamburguer").on("click", function(e) {
    e.preventDefault();
    jQuery("main").addClass("blur");
    jQuery(".main-nav").addClass("open");
    jQuery("body").css("overflow", "hidden");
  });
  jQuery("main").on("click", function(e) {
    if (jQuery(".main-nav").hasClass("open")) {
      e.preventDefault();
      jQuery(".main-nav").removeClass("open");
      jQuery("main").removeClass("blur");
      jQuery("body").css("overflow", "initial");
    }
  });
  if (jQuery(".faqs .grid-item").length > 0) {
    jQuery(".faqs .grid-item").on("click", function(e) {
      e.preventDefault();
      let contenido = jQuery(this).find(".contenido");
      let plus = jQuery(this).find(".plus");
      let minus = jQuery(this).find(".minus");
      if (contenido.css("display") === "none") {
        minus.show();
        plus.hide();
      } else {
        plus.show();
        minus.hide();
      }
      contenido.slideToggle();
    });
  }
  jQuery(".actions > a").on("click", function(e) {
    e.preventDefault();
    if (jQuery(this).attr("id") === "expandir") {
      jQuery(".contenido").slideDown();
      jQuery(".plus").hide();
      jQuery(".minus").show();
    } else {
      jQuery(".contenido").slideUp();
      jQuery(".plus").show();
      jQuery(".minus").hide();
    }
  });
  window.addEventListener("scroll", () => {
    if (window.scrollY > 100 && window.innerWidth > 1024) {
      jQuery(".header").addClass("scrolled");
    } else {
      jQuery(".header").removeClass("scrolled");
    }
  });
  var checkDivInterval = setInterval(function() {
    if (jQuery("#info-form nf-field").length) {
      var divs = jQuery("#info-form nf-field");
      divs.slice(0, 5).wrapAll("<div class='left-panel'></div>");
      clearInterval(checkDivInterval);
    } else {
      console.log("Div not found, checking again...");
    }
  }, 2e3);
})();
//# sourceMappingURL=main.js.map

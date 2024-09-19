!function() {
  function e() {
    r.classList.toggle("remove-scroll");
  }
  function t(e2) {
    var t2, i2, l2 = e2.getAttribute("href");
    return l2.match(/\.(jpeg|jpg|gif|png)/) ? (t2 = document.createElement("img"), t2.className = "lightbox-image", t2.src = l2, t2.alt = e2.getAttribute("data-image-alt"), t2) : l2.match(/(youtube|vimeo)/) ? (i2 = [], l2.match("youtube") && (i2.id = l2.split(/v\/|v=|youtu\.be\//)[1].split(/[?&]/)[0], i2.url = "www.youtube.com/embed/", i2.options = "?autoplay=1&rel=0"), l2.match("vimeo") && (i2.id = l2.split(/video\/|https:\/\/vimeo\.com\//)[1].split(/[?&]/)[0], i2.url = "player.vimeo.com/video/", i2.options = "?autoplay=1title=0&byline=0&portrait=0"), i2.player = document.createElement("iframe"), i2.player.setAttribute("allowfullscreen", ""), i2.player.className = "lightbox-video-player", i2.player.src = "https://" + i2.url + i2.id + i2.options, i2.wrapper = document.createElement("div"), i2.wrapper.className = "lightbox-video-wrapper", i2.wrapper.appendChild(i2.player), i2.wrapper) : r.querySelector(l2).children[0].cloneNode(true);
  }
  function i(e2) {
    var t2, i2 = { next: e2.parentElement.nextElementSibling, previous: e2.parentElement.previousElementSibling };
    for (t2 in i2)
      null !== i2[t2] && (i2[t2] = i2[t2].querySelector("[data-lightbox]"));
    return i2;
  }
  function l(l2) {
    if (l2.blur(), u = l2, l2.classList.add("current-lightbox-item"), c = document.createElement("button"), c.className = "lightbox-btn lightbox-btn-close", p = document.createElement("div"), p.className = "lightbox-content", p.appendChild(t(l2)), m = p.cloneNode(false), m.className = "lightbox-wrapper", m.style.animation = [o.scaleIn, o.fadeIn], m.appendChild(p), m.appendChild(c), d = p.cloneNode(false), d.className = "lightbox-container", d.style.animation = o.fadeIn, d.onclick = function() {
    }, d.appendChild(m), "gallery" === l2.getAttribute("data-lightbox")) {
      d.classList.add("lightbox-gallery");
      var a2;
      s = { next: "", previous: "" };
      for (a2 in s)
        s.hasOwnProperty(a2) && (s[a2] = c.cloneNode(false), s[a2].className = "lightbox-btn lightbox-btn-" + a2, s[a2].disabled = null === i(l2)[a2], m.appendChild(s[a2]));
    }
    r.appendChild(d), e();
  }
  function a(e2) {
    m.removeAttribute("style");
    var l2, a2 = i(u)[e2];
    if (null !== a2) {
      p.style.animation = o.fadeOut, setTimeout(function() {
        p.replaceChild(t(a2), p.children[0]), p.style.animation = o.fadeIn;
      }, 200), u.classList.remove("current-lightbox-item"), a2.classList.add("current-lightbox-item"), u = a2;
      for (l2 in s)
        s.hasOwnProperty(l2) && (s[l2].disabled = null === i(a2)[l2]);
    }
  }
  function n() {
    d.style.animation = o.fadeOut, m.style.animation = [o.scaleOut, o.fadeOut], setTimeout(function() {
      r.contains(d) && (r.removeChild(d), h.focus(), u.classList.remove("current-lightbox-item"), e());
    }, 200);
  }
  var o, r, c, s, u, d, p, m, b, h;
  b = (r = document.body).querySelectorAll("[data-lightbox]"), o = { fadeIn: "fadeIn .3s", fadeOut: "fadeOut .3s", scaleIn: "createBox .3s", scaleOut: "deleteBox .3s" }, Array.prototype.forEach.call(b, function(e2) {
    e2.addEventListener("click", function(t2) {
      t2.preventDefault(), l(e2), h = e2;
    });
  }), ["click", "keyup"].forEach(function(e2) {
    r.addEventListener(e2, function(e3) {
      if (r.contains(d)) {
        var t2 = e3.target, i2 = e3.keyCode, l2 = e3.type;
        -1 === [d, c].indexOf(t2) && 27 !== i2 || n(), d.classList.contains("lightbox-gallery") && ((t2 === s.next && "click" === l2 || 39 === i2) && a("next"), (t2 === s.previous && "click" === l2 || 37 === i2) && a("previous"));
      }
    });
  });
}();
//# sourceMappingURL=lightbox.js.map

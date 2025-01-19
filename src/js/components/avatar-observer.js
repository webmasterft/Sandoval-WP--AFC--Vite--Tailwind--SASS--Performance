// image-observer.js

'use strict';
// image-observer.js

// observer.js

export default function toggleAvatarVisibility() {
  const avatar = document.getElementById("sandoval-avatar");
  const footer = document.querySelector("footer");

  if (avatar && footer) {
    avatar.style.transition = "opacity 0.5s ease"; // Set up the transition for opacity
    avatar.style.opacity = "1"; // Ensure it starts fully visible

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          avatar.style.opacity = "0"; // Fade out when close to footer
        } else {
          avatar.style.opacity = "1"; // Fade in otherwise
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


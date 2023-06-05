try {
  gsap.to(".img-vertical-animation", {
    x: 250,
    scrollTrigger: {
      //   trigger: ".bg-green.relative.overflow-x-hidden",
      start: "top 0px",
      end: "bottom 0px",
      scrub: 0.5,
      //   markers: true,
    },
  });
} catch (error) {}

try {
  gsap.to(".car-animation", {
    x: "110vw",
    scrollTrigger: {
      trigger: ".start-car-animtion",
      start: "top 0px",
      end: "bottom 100px",
      scrub: 0.5,
      //   markers: true,
    },
  });
} catch (error) {}

try {
  gsap.to(".footer-animation", {
    y: 350,
    scrollTrigger: {
      // trigger: ".start-car-animtion",
      start: "top 0px",
      end: "bottom 0px",
      scrub: 0.5,
      //   markers: true,
    },
  });
} catch (error) {}

try {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElements = document.querySelectorAll(".element-fade-in");
  hiddenElements.forEach((el) => observer.observe(el));
} catch (error) {}

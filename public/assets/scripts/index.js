    const counters = document.querySelectorAll(".counter");
    let started = false;

    const startCounting = () => {
      counters.forEach((counter) => {
        const target = +counter.getAttribute("data-target");
        const duration = 3000; // total duration in ms (3 seconds)
        const interval = 20; // ms between steps
        const steps = duration / interval;
        let count = 0;
        const increment = target / steps;

        const update = () => {
          count += increment;
          if (count < target) {
            counter.innerText = Math.ceil(count).toLocaleString();
            setTimeout(update, interval);
          } else {
            counter.innerText = target.toLocaleString();
          }
        };

        update();
      });
    };

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !started) {
            startCounting();
            started = true;
          }
        });
      }, {
        threshold: 0.4
      }
    );

    const targetSection = document.querySelector(".second-hero");
    if (targetSection) observer.observe(targetSection);

    document.addEventListener("DOMContentLoaded", () => {
      const cards = document.querySelectorAll(".facility-card");

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const delay = entry.target.dataset.delay || "0s";
              entry.target.style.animationDelay = delay;
              entry.target.classList.add("animate");
            } else {
              entry.target.classList.remove("animate");
            }
          });
        }, {
          threshold: 0.3
        }
      );

      cards.forEach((card) => observer.observe(card));
    });


    document.addEventListener("DOMContentLoaded", () => {
      const cards = document.querySelectorAll(".news-card");

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const delay = entry.target.dataset.delay || "0s";
              entry.target.style.animationDelay = delay;
              entry.target.classList.add("animate");
            } else {
              entry.target.classList.remove("animate");
            }
          });
        }, {
          threshold: 0.3
        }
      );

      cards.forEach((card) => observer.observe(card));
    });

    const swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000, // 3 seconds
        disableOnInteraction: false, // keeps autoplay running even after manual swipe
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        },
      },
    });


    AOS.init({
      duration: 1000,
      once: false, // false = repeat every time it scrolls into view
    });
document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    });

    fadeElements.forEach(element => {
        observer.observe(element);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('.bagian-pembuat-keju');
    
    window.addEventListener('scroll', function () {
      const sectionPosition = section.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.5;
  
      if (sectionPosition < screenPosition) {
        section.classList.add('muncul');
      }
    });
  });

  
document.addEventListener("DOMContentLoaded", function() {
    const carouselItems = document.querySelector(".carousel-items");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    let scrollAmount = 0;
    const itemWidth = document.querySelector(".carousel-item").offsetWidth;

    nextBtn.addEventListener("click", () => {
        if (scrollAmount < (carouselItems.scrollWidth - carouselItems.clientWidth)) {
            scrollAmount += itemWidth;
            carouselItems.style.transform = `translateX(-${scrollAmount}px)`;
        }
    });

    prevBtn.addEventListener("click", () => {
        if (scrollAmount > 0) {
            scrollAmount -= itemWidth;
            carouselItems.style.transform = `translateX(-${scrollAmount}px)`;
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    });

    elements.forEach(element => {
        observer.observe(element);
    });
});


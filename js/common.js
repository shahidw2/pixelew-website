//  https://github.com/piersrueb/inViewport

const inViewport = (elem) => {
  // let allElements = document.getElementsByTagName(elem);
  let allElements = document.getElementsByClassName(elem);
  let windowHeight = window.innerHeight;
  const elems = () => {
    for (let i = 0; i < allElements.length; i++) {  //  loop through the sections
      let viewportOffset = allElements[i].getBoundingClientRect();  //  returns the size of an element and its position relative to the viewport
      let top = viewportOffset.top;  //  get the offset top
      if (top < windowHeight) {  //  if the top offset is less than the window height
        allElements[i].classList.add('in-view');  //  add the class
      } else {
        allElements[i].classList.remove('in-view');  //  remove the class
      }
    }
  }
  elems();
  window.addEventListener('scroll', elems);
}

inViewport('animation-element');  //  run the function on all section elements


$(document).ready(function () {
  jQuery(function ($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    // console.log(path, "PATHhhhh")
    $('ul li.jump a').each(function () {
      if (this.href === path) {
        // console.log(this.href, "JREF   PATHhhhh")
        $(this).addClass('active');
      }
      if (this.href.includes("/services")) {
        $('.navbar-nav .nav-item.dropdown').addClass('active');
      }
    });
  });

  jQuery(function ($) {
    var path = window.location.href;
    $('ul li a.nav-link').each(function () {
      if (this.href === path) {
        $(this).parent().addClass('active');
      }
      if (this.href.includes("/services")) {
        console.log(this.href, "12345")
        $('.navbar-nav .nav-item.dropdown').addClass('active');
      }
    });
  });

  jQuery(function ($) {
    var path = window.location.href;
    $('ul.dropdown-menu li a.dropdown-item').each(function () {
      if (this.href === path) {
        $(this).parent().addClass('active');
      }
    });
  });

  //gist.github.com/gre/1650294
  const easeInOutQuad = (t) => t < .5 ? 2 * t * t : -1 + (4 - 2 * t) * t;

  const inViewportCounter = (el) => {

    const duration = +el.dataset.duration || 3000;
    const start = +el.textContent || 0;
    const end = +el.dataset.count || 100;
    let raf;

    //stackoverflow.com/a/70746179/383904
    const counterStart = () => {
      if (start === end) return; // If equal values, stop here.

      const range = end - start;
      let curr = start; // Set current to start
      const timeStart = Date.now();

      const loop = () => {
        let elaps = Date.now() - timeStart;
        if (elaps > duration) elaps = duration;
        const frac = easeInOutQuad(elaps / duration); // Get the time fraction with easing
        const step = frac * range; // Calculate the value step
        curr = start + step; // Increment or Decrement current value
        el.textContent = Math.trunc(curr); // Apply to UI as integer
        if (elaps < duration) raf = requestAnimationFrame(loop); // Loop
      };

      raf = requestAnimationFrame(loop); // Start the loop!
    };

    const counterStop = (el) => {
      cancelAnimationFrame(raf);
      el.textContent = start;
    };

    //stackoverflow.com/a/70746179/383904
    const inViewport = (entries, observer) => {
      entries.forEach(entry => {
        // Enters viewport:
        if (entry.isIntersecting) counterStart(entry.target);
        // Exits viewport:
        else counterStop(entry.target);
      });
    };
    const Obs = new IntersectionObserver(inViewport);
    const obsOptions = {}; //developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API#Intersection_observer_options
    // Attach observer to element:
    Obs.observe(el, obsOptions);
  };

  document.querySelectorAll('[data-count]').forEach(inViewportCounter);


  //Enable swiping...
  $(".carousel-inner").swipe({
    //Generic swipe handler for all directions
    swipeLeft: function (event, direction, distance, duration, fingerCount) {
      $(this).parent().carousel('prev');
    },
    swipeRight: function () {
      $(this).parent().carousel('next');
    },
    //Default is 75px, set to 0 for demo so any distance triggers swipe
    threshold: 0
  });

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })


  $("#carouselBottom").swipe({
    swipe: function(event, direction) {
      if (direction == 'right') {
        $(this).carousel('next');
      }
      if (direction == 'left') {
        $(this).carousel('prev');
      }
    },
    allowPageScroll: "vertical",
  });

  // const myCarouselElement = document.querySelector('#carouselBottom')

  // const carousel = new bootstrap.Carousel(myCarouselElement, {
  //   interval: 100,
  //   touch: false
  // })

});



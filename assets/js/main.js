
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }



  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function (e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Mobile nav toggle
   */
  const mobileNavToogle = document.querySelector('.mobile-nav-toggle');
  if (mobileNavToogle) {
    mobileNavToogle.addEventListener('click', function (event) {
      event.preventDefault();

      document.querySelector('body').classList.toggle('mobile-nav-active');

      mobileNavToogle.classList.toggle('bi-list');
      mobileNavToogle.classList.toggle('bi-x');
    });
  }


  window.onscroll = function () {
    if (document.querySelector('body').classList == 'mobile-nav-active') {
      document.querySelector('.mobile-nav-toggle').click();
    }
    if (document.querySelector('#search_toggle').checked == true) {
      document.getElementById("search_toggle").checked = false;
    }
  }
  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.tg_link');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function (event) {
      if (document.querySelector('.mobile-nav-active')) {

        event.preventDefault();
        // this.classList.toggle('active');

        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });









  // verify code
  $('#verify_box').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: '/suscribe/verify_mail.php',
      processData: false,
      contentType: false,
      data: new FormData(this),

      statusCode: {
        404: function () {
          alert("Something is Wrong");
        }
      },
      success: function (data) {
        $('.verify_alert').html(data);
        // $('#verify_box')[0].reset();
        // $('#modalbtn').click();
        // $("#d")[0].reset()
        setTimeout(function () {
          $('.verify_alert').html('');

        }, 15000)

      }
    });
  })


  // app install dialog box open
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
      navigator.serviceWorker.register('/assets/js/sw.js').then(function (registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function (err) {
        // registration failed :(
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }

  let deferredPrompt;
  var div = document.querySelector('.add-to');
  var button = document.querySelector('.add-to-btn');
  div.style.display = 'none';

  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    div.style.display = 'block';

    button.addEventListener('click', (e) => {
      // hide our user interface that shows our A2HS button
      div.style.display = 'none';
      // Show the prompt
      deferredPrompt.prompt();
      // Wait for the user to respond to the prompt
      deferredPrompt.userChoice
        .then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
          } else {
            console.log('User dismissed the A2HS prompt');
          }
          deferredPrompt = null;
        });
    });
  });




})()
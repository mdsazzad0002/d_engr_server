"use strict";

document.addEventListener('DOMContentLoaded', function () {

    /**
    // * Initiate Pure Counter
    // */
    new PureCounter();

    // Initiate aos
    AOS.init();


    // typed
    const typed = document.querySelector('.typed')
    if (typed) {
        let typed_strings = typed.getAttribute('data-typed-items')
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        });
    }



    
    // end Load Content

    // call function load content
    
    // load_content("/assets/custom/footer.php", "footer_content_load", "GET", 400);

});
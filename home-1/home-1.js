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



    // add shedule for data
    let timing_func = 0;

    function load_content(sorce_url, place_class, place_method, time) {
        setTimeout(function () {
            timing_func += time;
            const xhttp = new XMLHttpRequest();

            xhttp.onload = function () {
                document.querySelector(`.${place_class}`).innerHTML = this.responseText;
            }
            xhttp.open(place_method, sorce_url, true);
            xhttp.send();
        }, timing_func)
    }
    // end Load Content

    // call function load content
    load_content("/home-1/team.php", "team", "GET", 1500);
    // load_content("/assets/custom/footer.php", "footer_content_load", "GET", 400);

});
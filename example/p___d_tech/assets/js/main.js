// mixitub

if (document.querySelector('.portfolio')) {
    var containerEl = document.querySelector('[data-ref~="mixitup-container"]');
    var mixer = mixitup(containerEl, {
        selectors: {
            control: '[data-mixitup-control]',
            target: '[data-ref~="mixitup-target"]'
        },
        load: {
            filter: '.Website'
        },
        animation: {
            duration: 300
        }
    });
}

// protfilio cata 1
var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

// protfio cata 2
var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

// protfilio cata 3
var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 2500,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});


// review 
var swiper = new Swiper(".thumb1", {
    loop: true,
    spaceBetween: 8,
    slidesPerView: "auto",
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper2 = new Swiper(".review1", {
    loop: true,
    autoplay: {
        delay: 1500,
    },
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});


// news
var swiper = new Swiper(".news-slider", {
    cssMode: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // mousewheel: true,
    // keyboard: true,
});



window.onscroll = function () {
    // console.log(window.scrollY)
    if (window.scrollY > 300) {
        document.querySelector(".navbar").classList.add('sticky');
    } else {
        document.querySelector(".navbar").classList.remove('sticky');

    }


    document.querySelector('#toggle').checked = false;
}




// calendadr

// load calender data
function load_cleander() {
    let xhttp = new XMLHttpRequest;
    xhttp.onload = function () {

        let data_response = this.responseText;
        data_response = JSON.parse(data_response)
        if (data_response.status == true) {
            // console.log(data_response.data)


            var events = new Array();

            Object.keys(data_response.data).forEach(key => {
                events.push(
                    data_response.data[key]
                );

            })

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,today,next',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                },
                // initialDate: '2023-01-12',
                // timeZone: 'local',
                titleFormat: { year: 'numeric', month: '2-digit' },
                themeSystem: 'bootstrap5',
                editable: false,
                selectable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                navLinks: true,
                select: function (arg) {
                    $('#event_start_date').val(moment(arg.start).format('YYYY-MM-DD'));
                    $('#event_end_date').val(moment(arg.end).format('YYYY-MM-DD'));
                    $('#event_entry_modal').modal('show');
                    // var event_name = $("#event_name").val();
                    // if (title) {
                    //     calendar.addEvent({
                    //         title: event_name,
                    //         start: arg.sta,
                    //         end: event_end_date,
                    //         allDay: arg.allDay
                    //     })


                    // }
                    // calendar.unselect()

                },
                events: events,
            });
            console.log(events)
            calendar.render();

        } else {
            console.log(data_response.msg)
        }
    }
    xhttp.open("GET", "../services/get_data_calender.php", true);
    xhttp.send();

}


// insert data calendar
function save_event() {
    var event_name = $("#event_name").val();
    var event_start_date = $("#event_start_date").val();
    var event_end_date = $("#event_end_date").val();
    if (event_name == "" || event_start_date == "" || event_end_date == "") {
        Swal.fire({
            icon: 'warning',
            title: 'Please enter all required details',
            timer: 5500
        })
        return false;
    }

    $.ajax({
        url: "set_data_calender.php",
        type: "POST",
        dataType: 'json',
        data: { event_name: event_name, event_start_date: event_start_date, event_end_date: event_end_date },
        success: function (response) {
            $('#event_entry_modal').modal('hide');
            if (response.status == true) {
                Swal.fire({
                    icon: 'success',
                    title: response.msg,
                    timer: 2500
                })
                load_cleander();
            }
            else {
                Swal.fire({
                    icon: 'success',
                    title: response.msg,
                    timer: 2500
                })
            }
        },
        error: function (xhr, status) {
            console.log('ajax error = ' + xhr.statusText);
            Swal.fire({
                icon: 'warning',
                title: response.msg,
                timer: 2500
            })
        }
    });
    return false;
}

// loadcomplete content call load calender
document.addEventListener('DOMContentLoaded', function () {
    // requested by ajax
    if (document.getElementById('calendar')) {
        load_cleander();
    }

});

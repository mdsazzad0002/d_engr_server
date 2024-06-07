document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {

        document.querySelector("#search_form button[type='submit']").click();
    }, 500)
    let submit_form = document.querySelector('#search_form');
    submit_form.addEventListener('submit', function (e) {
        e.preventDefault();

        let vaildData = document.querySelector('#search_form input').value;
        vaildData = vaildData.trim();
        if (vaildData) {
            // console.log(thi.value);
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                document.querySelector('.content_load_by_ajax').innerHTML = this.responseText;
            }
            xhttp.open("GET", "search.php?query=" + vaildData, true);
            xhttp.send();
        } else {
            console.log('not found')
        }

    })


});

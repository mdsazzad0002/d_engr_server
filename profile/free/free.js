// call swackase data

document.addEventListener("DOMContentLoaded", () => {
    let data_array;
    const xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            data_array = this.responseText;
            data_array = JSON.parse(data_array)
            let i = 0;
            while (data_array[i]) {
                // console.log(text)


                let print_data = `<div data-aos="fade-up" data-aos-delay="100" id="download_${data_array[i]['view_id']}" class="mix ${data_array[i]['catagory']}">
    <div class="member">

        <!-- start row -->
        <div class="row">
            <!-- image col5 -->
            <div class="col-md-5">
                <div class="member-img text-center align-items-center justify-between-center">
                    <img src="/image/notice/${data_array[i]['image']}" class="img-fulid" alt="" />

                </div>
            </div>
            <!-- content col7 -->
            <div class="col-md-7">
                <div class="member-info">
                    <h4 class="h5">
                        ${data_array[i]['name']}

                    </h4>

                    <p class="">${data_array[i]['description']} </p>


                    <div class="btns_project">
                        <a target="_blank" href="/view/?id=${data_array[i]['view_id']}" title="View this Website" class="btn  "><i class="bi bi-arrow-up-right-square ">&nbsp;Live Demo</i></a>

                        <a  href="${data_array[i]['download_link']}" title="View this Website" class="btn downbtn"><i class="bi bi-download"></i>&nbsp;Free DownLoad</i></a>
                    </div>





                </div>

            </div>
            <!-- end content -->


        </div>
        <!-- end row -->

    </div>
</div>`;




                document.querySelector('#swackase_load').innerHTML += print_data;
                i++;

            }

            // auto download when get data download id
            function download_project() {
                const queryString = window.location.search;
                const urlParams = new URLSearchParams(queryString);

                const download = urlParams.get('download');
                console.log(download);


                if (download != '') {
                    let downloadbtn = document.querySelector('#download_' + download + ' .btns_project .downbtn').click();
                    console.log(downloadbtn);
                } else {
                    console.log('Please try later....')
                }
            }
            download_project();



        }
    };

    xhttp.open("GET", "swackase.php?project_id=&catagory", true);
    xhttp.send();

    setTimeout(() => {
        var containerEl = document.querySelector('#swackase_load');
        var mixer = mixitup(containerEl, {
            selectors: {
                control: '[data-mixitup-control]'
            },
            controls: {
                toggleDefault: 'all'
            }
        });
    }, 3000)

})


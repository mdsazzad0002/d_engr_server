<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>JSON</p>
    <script>
        let text;
        const xhttp = new XMLHttpRequest;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                text = '[' + this.responseText + ']';
                text = JSON.parse(text)


                text.forEach((staffDetail) => {
                    let sentence = `I am ${staffDetail.name} a staff of Royal Suites.`;
                    console.log(sentence);
                });
            }
        };

        xhttp.open("GET", "swackase.php?project_id=&catagory", true);
        xhttp.send();
        // 	text.forEach(function callback(value, index) {
        // console.log(`${index}: ${value}`);
        //

        // text = [{
        //     name: "Cttc",
        //     feture: "sd",
        //     image: "Vc6bHEConr1owmwYUINjk5r6Rv1plk6icMpFgnTqggrM4LtZmsscreencapture-ttcm-pw-example1-book-2023-08-22-19_28_53.png",
        //     view_id: "20",
        //     catagory: "0",
        //     description: "asd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sdasd sdfsd fs sd sd",
        //     download_link: "/example/.zip"
        // }, {
        //     name: "Computer & Science Technology'",
        //     feture: "sd",
        //     image: "Ih5yvZuXKvPftShnrNxRoRQ69pdyQMuyco2TqhiglyfRymUdBYscreencapture-127-0-0-1-5500-2023-08-21-12_35_43.png",
        //     view_id: "19",
        //     catagory: "0",
        //     description: "asd",
        //     download_link: "sd.zip"
        // }];
        // text = JSON.parse(text)
    </script>
</body>

</html>


let print_data = `<div data-aos="fade-up" data-aos-delay="100">
    <div class="member">

        <!-- start row -->
        <div class="row">
            <!-- image col5 -->
            <div class="col-md-5">
                <div class="member-img text-center align-items-center justify-between-center">
                    <img src="/image/notice/${data_array['image']}" class="img-fulid" alt="" />

                </div>
            </div>
            <!-- content col7 -->
            <div class="col-md-7">
                <div class="member-info">
                    <h4 class="h5">
                        ${data_array['name']}

                    </h4>

                    <p class="">${data_array['description']} </p>


                    <div class="btns_project">
                        <a target="_blank" href="/view/?id=${data_array['project_id']}" title="View this Website" class="btn  "><i class="bi bi-arrow-up-right-square ">&nbsp;Live Demo</i></a>

                        <a download="" href="${data_array['download_link']}" title="View this Website" class="btn"><i class="bi bi-download"></i>&nbsp;Free DownLoad</i></a>
                    </div>





                </div>

            </div>
            <!-- end content -->


        </div>
        <!-- end row -->

    </div>
</div>`;
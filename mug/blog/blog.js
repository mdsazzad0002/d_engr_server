function delete_ins(thi, id) {
    $.ajax({
        type: "POST",
        url: 'delete_ins.php',
        data: {
            'id': id,
        },
        success: function (data) {
            $(this).html(data);
            data = data.replace(/\s/g, '');

            if (data == "Deleted") {
                $(this).html(data);
                $(thi).parents('.ins_root').hide();
            } else {
                console.log(data)
            }
        }
    })
}

function display_instruction() {
    $.ajax({
        type: 'POST',
        url: 'instruction_display.php',
        success: function (data) {
            $('.display_instruction').html(data);
        }
    })
}
display_instruction();


// blog upload and update box open

let blog_upload = document.querySelector('.blog_upload');
let blog_upload_iframe = document.querySelector('.blog_upload iframe');
let close_btn = document.querySelector('.close_btn');

function upload_and_update(thi) {
    if (blog_upload.classList != 'blog_active') {
        let data_url = thi.getAttribute('data-url');
        blog_upload_iframe.src = data_url;
    }
    blog_upload.classList.toggle('blog_active');
    close_btn.classList.toggle('btn_active');
}

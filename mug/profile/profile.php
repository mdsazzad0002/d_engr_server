

          
    <div>
        <div>
            <h3 class="text-center display-1">
                <form id="profile_pic_form" method="post" enctype="multipart/form-data" action="">
                     <label id="profile_pic_label" class=" position-relative my-auto" for="profile_pic">
                        <!-- load by ajax profile pic -->
                    </label>
                   
                    
              
                    <input required hidden onchange="profile_pic_uploaded()" id="profile_pic" type="file" name="profile_pic">
                    <input hidden id="sub_btn_pic" type="submit" name="submit">
                    <!-- this user type need idendity user -->
                    <input type="text" name="user_type" hidden  value="<?=$user_type;?>">
                </form>
                
            </h3>
            <p class="text-center">You can update your Account.</p>
          <form id="update_profile" method="post" enctype="multipart/form-data" action="">
            <div class="profile_display">
                <!-- load by ajax -->
            </div>
            <div class="success_update">
                <!-- load by ajax response -->
            </div>
            
             <input  required type="checkbox" id="check" name="agree">
            <label for="check">  Are you agree Terms and condition</label>    

             <!-- this user type need idendity user -->
                <input type="text" name="user_type" hidden  value="<?=$user_type;?>">
            <button class="btn btn-warning float-right btn-sm btn-icon-split" type="submit" placeholder="submit" name="submit" value="Submit">
                <span class="icon text-white-50"><i class="bi bi-cloud-arrow-up-fill mr-2"></i></span>
                <span class="text">Update</span> 
            </button>

            </form>
        </div>
    </div>



<script type="text/javascript">
    // document load after js worked
    document.addEventListener("DOMContentLoaded", (event) => {

        // alert data success
        function sweet_alert(i_icon, i_title) {
            swal({
                'icon': i_icon,
                'title': i_title,
            })
        }

        // jquery js not worked insted ajax
        function easyAjax(type, array, url, print, append, formdata_check) {
            let xhttp = new XMLHttpRequest();

            // declare form data 
            let formdata;
            if (formdata_check == false) {
                formdata = new FormData();
                Object.keys(array).forEach(function(key, index) {
                    formdata.append(key, this[key]);
                }, array);
            } else {
                formdata = array;
            }


            // requested complete print response data
            xhttp.onload = function() {
                let print_data = document.querySelector(print);
                // console.log(this.responseText)


                if (formdata_check == false) {
                    if (append == false) {
                        print_data.innerHTML = this.responseText;
                    } else {
                        print_data.innerHTML += this.responseText;
                    }
                } else {
                    data = this.responseText;
                    data = JSON.parse(data);
                    sweet_alert(data.i_icon, data.i_title);
                }
            }

            // url open and send
            xhttp.open(type, url);
            xhttp.send(formdata);
        }



        // profile display
        function profile_display() {
            let array = {
                'user_type': '<?= $user_type; ?>',
            }
            easyAjax('post', array, 'update_display.php', '.profile_display', false, false);
        }
        profile_display();


        // update profile
        update_profile = document.querySelector('#update_profile');
        update_profile.addEventListener('submit', (e) => {
            e.preventDefault();
            let array = new FormData(update_profile);
            easyAjax('post', array, 'update.php', '.success_update', false, true);
        })


        // display profile pic load
        function display_profile_pic() {
            let array = {
                'user_type': '<?= $user_type; ?>',
            }
            easyAjax('post', array, 'profile_pic.php', '#profile_pic_label', false, false);
        }
        display_profile_pic()



        // onchange submit button click
        let profile_pic_input = document.querySelector('#profile_pic');
        profile_pic_input.addEventListener('change', () => {
            document.querySelector('#sub_btn_pic').click();
        })


        // update profile
        profile_pic_form = document.querySelector('#profile_pic_form');
        profile_pic_form.addEventListener('submit', (e) => {
            e.preventDefault();
            let array = new FormData(profile_pic_form);
            easyAjax('post', array, 'profile_pic_upload.php', '.success_update', false, true);
            setTimeout(() => {
                display_profile_pic();
            }, 5000)
        })

    })
</script>
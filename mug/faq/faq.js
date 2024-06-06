 function faq_display(){
            $.ajax({
                type:"POST",
                url:'faq_display.php',
                success:function(data) {
                    $('.faq_display').html(data);
                }
            })
        }
        faq_display();

        $('#form_faq').on('submit',function(e) {
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'faq_insert.php',
                processData:false,
                contentType:false,
                data:new FormData(this),
                success:function(data) {
                    $('.status').html(data);
                     faq_display();
                     setTimeout(function() {
                         $('.status').html('');
                     },1500)

                }
            })
        })
          $('#form_faq_update').on('submit',function(e) {
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'faq_insert.php',
                processData:false,
                contentType:false,
                data:new FormData(this),
                success:function(data) {
                    $('.status_update').html(data);
                     faq_display();
                      setTimeout(function() {
                         $('.status_update').html('');
                     },1500)

                }
            })
        })

        function update_faq(id) {
            $.ajax({
                type:'post',
                url:'faq_update.php',
                data:{
                    'id':id,
                },success:function(data) {
                    $('.content_faq').html(data);
                    document.querySelector('#btn_show').click();
                }
            })
        }

        function delete_faq(thi, id){
        	let xhttp= new XMLHttpRequest;
        	let formdata= new FormData();
        	formdata.append('faq_id', id);
        	xhttp.onload=function(){
        		let data = JSON.parse(this.responseText);
        		swal({
        			'icon':data.i_icon,
        			'title':data.i_title,
        		})
        		if (data.i_icon=='success') {
        			$(thi).parents('tr').hide();
        		}

        	}
        	xhttp.open("POST", "faq_delete.php");
        	xhttp.send(formdata);
        }
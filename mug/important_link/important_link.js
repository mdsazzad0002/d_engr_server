    // display link
    // insert link
    // delete link


    // link display
    function link_display() {
        $.ajax({
            type:'POST',
            url:'link_display.php',
            success:function(data) {
                $('.link_display').html(data);
            }
        })
    }
    link_display();


    // insert link
    $('#link_from').on('submit',function(e) {
        e.preventDefault();
         $.ajax({
            type:'POST',
            url:'link_insert.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status').html(data);
                $('#link_from')[0].reset();
                link_display();
                setTimeout(function(){
                     $('.status').html('');
                },2000)
            }
        })
    })




    // delete link
    function delete_link(thi, id) {
        $.ajax({
            type:'POST',
            url:'link_delete.php',
            data:{
                'id':id,
            },
            success:function(data) {
                $(this).html(data);
                 data = data.replace(/\s/g, '');
                
                if (data=="Delete") {
                    $(this).html(data);
                    $(thi).parents('tr').hide();
                }else{
                     console.log(data)
                }
            }
        })
    }

    // update link
        function update_link(thi, id){
           $.ajax({
            type:'POST',
            url:'update_display.php',
            data:{
                'id':id,
            },
            success:function(data) {
                $('.update_content').html(data);
                document.querySelector('.exampleModalsdfasd').click();
              
            }
        })
    }

        // update link
    $('#update_link_form').on('submit',function(e) {
        e.preventDefault();
         $.ajax({
            type:'POST',
            url:'update_link.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status_update').html(data);
                setTimeout(function(){
                     $('.status_update').html('');
                     link_display();
                },5000)
            }
        })
    })
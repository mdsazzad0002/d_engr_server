 // display photo data
    // insert photo data
    // update photo datda by update photo
    // update data
    // delete data

    // display photo data
    function photo_display(){
        $.ajax({
            type:'POST',
            url:'photo_display.php',
            success:function (data) {
                $('.photo_display').html(data);
            }
        })
    }
    photo_display();



    // insert photo data
    $('#photo_from').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'photo_insert.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status').html(data);
                $('#photo_from')[0].reset();
                photo_display();
                setTimeout(function() {
                     $('.status').html('');
                },2000)
            }
        })
    })


    // update prepare photo data
   function update_photo(thi,id){
        $.ajax({
            type:'POST',
            url:'update_display.php',
            data:{
                'id':id,
            },success:function(data) {
                $('.update_display').html(data);
                $('#update_btn').click();
            }
        })
    }

    // update photo
    $('#photo_from_update').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'update_photo.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status_update').html(data);
                photo_display();
                 setTimeout(function() {
                     $('.status_update').html('');
                },2000)
            }
        })
    })


    // delete photo data
    function photo_delete(thi, id) {
        $.ajax({
            type:"POST",
            url:'delete_photo.php',
            data:{
                'id':id,
            },success:function(data) {
                 data = data.replace(/\s/g, '');
                 console.log(data)
                if (data=="Delete") {
                    $(thi).parents('tr').hide();
                }

            }
        })
    }
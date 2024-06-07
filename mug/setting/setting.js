// what type data send 
     function logo(th){
        $('.logo').hide();
        $('.web_title').hide();
        $('.full_form').hide();
        $('.fav_icon').hide();

        var val=$(th).val();
        $('.'+val).show();
    }
    logo()
    
    function icon_title_display(){
        $.ajax({
            type:'POST',
            url:'display_icon_title.php',
            success:function(data){
                $('.icon_title_display').html(data);
            }
        })
    }
    icon_title_display();

    // data insert by common file
    $('#icon_title_form').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'insert_setting.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function(data) {
                $('.status').html(data);
                icon_title_display();
                setTimeout(function() {
                    $('.status').html('');
                },2000)
            }
        })
    })




    // information show
    function display_info(){
        $.ajax({
            type:'POST',
            url:'display_info.php',
            success:function(data){
                $('.display_info').html(data);
            }
        })
    }
    display_info()

    // data insert information
     $('#info_form').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'insert_setting.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function(data) {
                $('.status_web').html(data);
                display_info();
                setTimeout(function() {
                    $('.status_web').html('');
                },2000)
            }
        })
    })


     // delete logo
     function icon_delete(thi, id, tb, file){
        $.ajax({
            type:'POST',
            url:'delete_setting.php',
            data:{
                'id':id,
                'tb':tb,
                'file':file,
            },
            success:function(data) {
                $(thi).parents('tr').hide()
            }
        })
     }


// info delete like web_title , information table
     function info_delete(thi, id, tb){
        $.ajax({
            type:'POST',
            url:'delete_setting.php',
            data:{
                'id':id,
                'tb':tb,
            },
            success:function(data) {
                $(thi).parents('tr').hide()
            }
        })
     }

function admin_display(){
		$.ajax({
			type:'POST',
			url:'ammin_display.php',
			success:function(data){
				$('.admin_display').html(data);
			}
		})
	}

	admin_display();


// insert admin
$('#admin_from').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		type:'POST',
		url:'insert_admin.php',
		contentType:false,
		processData:false,
		data:new FormData(this),
		success:function(data) {
			$('.status').html(data);
			admin_display();
			setTimeout(function(){
				$('.status').html('');
			},1500)
		}
	})
})


// delete amdin
function delete_admin(thi, id){
	$.ajax({
		type:'POST',
		url:'delete_admin.php',
		data:{
			'id':id,
		},success:function(data){
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

// access change
function access_change(thi,id){
	$.ajax({
		type:'post',
		url:'access_change.php',
		data:{
			'id':id,
			'change':$(thi).val(),
		},success:function(data) {
			console.log(data);
		}
	})
}

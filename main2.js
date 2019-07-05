
$('form').on('submit', function(){
	
	var that=$(this),
	url=that.attr('action'),
	type=that.attr('method'),
		data=$('#fid').serialize();
		var that=$(this),
		name=that.attr('name'),
		value=that.val();
		data[name]=value;


$.ajax({
	url:url,
	type:type,
	data:data,
	success: function(data,response){
		console.log(response);
		 $("#mydiv").html(data);
		  

	}

});
return false;
});
$('document').ready(function(){
	$('#images').on('change',function(e){	
	    e.preventDefault();	
	    var filess = e.target.files;

	    $.each(filess, function(i,file){
            var reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = function(e){
            	var template = 
            	    '<div class="col-sm-3">'+
	            	    '<img class="img-responsive thumbnail"  src="'+e.target.result+'" alt="Photo">'+
	            	     '<br>'+
            	     '</div>';
            	
            	$('#images-to-upload').append(template);
            } 
		});
        var token = $('meta[name="csrf_token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });   
        var formData = new FormData();
        var ins=document.getElementById('images').files.length;

        for(var x=0;x<ins;x++){
	 	    formData.append("images[]", document.getElementById('images').files[x]);
	  	}
   
	  	console.log(formData);

        $.ajax({
			type: 'POST',
	        url: '/document/upload',
			cache: false,
			data : formData,
			processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server it
			dataType: 'JSON',
			success : function(data){
				console.log(data);
			}
		},"json");

     });
});











/*$('document').ready(function(){
	$('#images').on('change',function(e){
		
        var token = $('meta[name="csrf_token"]').attr('content');
		var files = e.target.files;
		var fileSelect = document.querySelector( "form" );
		console.log(fileSelect);

        var formData = new FormData(fileSelect);
        console.log(files);
       // formData.append("images", files);
        //console.log(formData);
		/*$.each(files, function(i,file){
			formData.append("images", file);

			//console.log(file);
            /*var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e){
            	var template = 
            	    '<div class="col-sm-3">'+
	            	    '<img class="img-responsive"  src="'+e.target.result+'" alt="Photo">'+
	            	     '<br>'+
            	     '</div>';
            	
            	$('#images-to-upload').append(template);
            } */
		/*});*/
		//formData.append("images", files);
       /* console.log(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });   
		$.ajax({
	        type: 'post',
	        url: '/document/upload',
	        data: formData,
	        contentType: false,
            processData: false,           
	        success: function (data) {

	        }
	    });
	});
});*/
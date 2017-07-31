$('#upsize').on('click', function(){
	$('.title').css('font-size','+=1');
});

$('#downsize').on('click', function(){
	$('.title').css('font-size','-=1');
});

$('#higher').on('click', function(){
	$('.title').css('margin-top','-=1');
});

$('#lower').on('click', function(){
	$('.title').css('margin-top','+=1');
});

//Block select new configuration before save, after save reset, or clear changes
//Update value to the form

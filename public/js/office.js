//Home page
var title = $('#title');
var viewSelector = $('#view-selector');
var editSelector = $('#edit-selector');
var hoverProjectFlag = 1;
var showProject = function(selected){
	//This is where we set the display
	id = selected.attr('id');
	title.html(id);
	viewSelector.val(id);
	editSelector.val(id);
}

var hoverProject = $('.project').hover(function(){
	if(hoverProjectFlag)showProject($(this));
});



var clickProject = $('.project').on('click', function(){
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		hoverProjectFlag = 1;
	}
	else{
		$('.project').removeClass('active');
		$(this).addClass('active');
		showProject($(this));
		hoverProjectFlag = 0;
	}
});


$(hoverProject);
$(clickProject);

$('#create').on('click',function(){
  $('.ui.modal').modal('show');
});
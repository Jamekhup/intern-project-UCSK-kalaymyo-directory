$(document).ready(function(){
	$('.navbar-collapse .navbar-nav a').each(function(){
		if((window.location.pathname.indexOf($(this).attr('href'))) > -1){
			$(this).addClass('activeTwo');
			// $('.navbar-collapse .navbar-nav .active').removeClass('active');
		}
	});
});
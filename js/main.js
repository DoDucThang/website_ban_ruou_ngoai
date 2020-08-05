$(document).ready(function(){
	// ---------------- Min menu page ----------------
	$('#min-menu-page li.has-child > a').click(function(){
		$(this).parent().find('ul:first').slideToggle(function(){
            if(!$(this).is(":hidden")){ // Open
                $(this).parent('.has-child').addClass('expand');
            }else{
                $(this).parent('.has-child').removeClass('expand');
            }
        });
		return false;
	});
});
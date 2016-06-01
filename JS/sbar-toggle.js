$(document).ready(function(){
    $("#hide").click(function(){
        $("#social-sidebar").toggle();
    });
});

$(document).ready(function(){
	$('#hide').click(function(){
		$(this).find('i').toggleClass('fa-chevron-left fa-chevron-right')
	});
});
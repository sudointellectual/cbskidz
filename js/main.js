$(function() {
	var selectedAvatar = 'images/avatars/cientifica_32.png';

	$('a.login').on('click', function() {
		$.cookie('loggedIn', true);
		$.cookie('userName', 'theboss');
	});

	if($.cookie('loggedIn') == 'true') {
        $('.login-link').hide();
        $('.profile-link').show();
    } else {
        $('.login-link').show();
        $('.profile-link').hide();
    }
	// profile page
	$('.avatars img').on('click', function(){
		// global
		var selectedAvatar = $(this).attr('src');
		 $('.avatar').attr("src", selectedAvatar);
	});
});


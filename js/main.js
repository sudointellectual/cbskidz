$(function() {	
	var teacher = {firstName:"Jess", username:"rcucamonga", password:"rancho"};
	var student = {firstName:"Elise", username:"snorlax", password:"password123"};

	var selectedAvatar = 'images/avatars/cientifica_32.png';

	$('a.login').on('click', function() {
		$.cookie('loggedIn', true);
		$.cookie('userName', 'theboss');
	});

	$('a.logout').on('click', function() {
		$.cookie('loggedIn', false);
		location.reload();
	});

	if($.cookie('loggedIn') == 'true') {
        $('.login-link').hide();
        $('.profile-link').show();
    } else {
        $('.login-link').show();
        $('.profile-link').hide();

        // redirect users to login page if they're not logged in 
        if (window.location.pathname == '/cbskidz/index.php') {
        	window.location.href = 'login.php';
        }
    }

    // achievement page
    

    // login page
    $('#login-form').submit(function(e) {
    	e.preventDefault();
    	$.cookie('loggedIn', true);
    	window.location.href = 'index.php';
    })

	// profile page
	$('.avatars img').on('click', function(){
		// global
		var selectedAvatar = $(this).attr('src');
		 $('.avatar').attr("src", selectedAvatar);
	});
});


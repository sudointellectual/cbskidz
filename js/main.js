$(function() {	
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
		if ($.cookie('userType') == 'student') {
			$('ul.teacher-logged-in').hide();
	        $('ul.student-logged-in').show();
	        $('ul.logged-out').hide();
	    } else {
	    	$('ul.teacher-logged-in').show();
	    	$('ul.student-logged-in').hide();
	        $('ul.logged-out').hide();
	    }
    } else {
        $('ul.student-logged-in').hide();
        $('ul.teacher-logged-in').hide();
        $('ul.logged-out').show();

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
    	if( $('#username').val() === 'teacher') {
    		$.cookie('userType', 'teacher');
    	} else {
    		$.cookie('userType', 'student');
    	}

    	window.location.href = 'index.php';
    })

	// profile page
	$('.avatars img').on('click', function(){
		// global
		var selectedAvatar = $(this).attr('src');
		 $('.avatar').attr("src", selectedAvatar);
	});
});


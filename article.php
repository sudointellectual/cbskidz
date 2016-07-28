<?php include('partials/header.php'); ?>
	
	<script type="text/javascript" src="js/main.js"> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<button type="button" class="btn btn-default" aria-label="Left Align">
  		<a href="index.php">
  			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  		</a>
	</button>

	<div id="main-article" style="border:2px;">
		<p> swipe here! </p>
	</div>

	<script>
	$(document).ready(function(){
		$("p").on("swipeleft",function(){
	  		alert("You swiped left!");
		});
	}); 
	</script>

<?php include('partials/footer.php'); ?>
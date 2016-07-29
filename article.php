<?php include('partials/header.php'); ?>
	
	<head>
		<style>
		  .carousel-inner > .item > img,
		  .carousel-inner > .item > a > img {
		      width: 70%;
		      margin: auto;
		  }
	  	</style>
  	</head>
	<button id="back-to-index" type="button" class="btn btn-default" aria-label="Left Align">
  		<a href="index.php">
  			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  		</a>
	</button>

	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false"  style="height: 100%;">

	    <?php include('partials/article-content.php'); ?>

	</div>

<?php include('partials/footer.php'); ?>

<!-- data-wrap="false" -->
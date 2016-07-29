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

	<div id="articleCarousel" class="carousel slide" data-ride="carousel" data-interval="false"  style="height: 100%;">

	    <?php include('partials/article-content.php'); ?>

	</div>

<?php include('partials/footer.php'); ?>

<!-- data-wrap="false" -->
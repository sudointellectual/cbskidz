<?php include('partials/header.php'); ?>
	
	<head>
		<style>
		  .carousel-inner > .item > img,
		  .carousel-inner > .item > a > img {
		      width: 70%;
		      margin: auto;
		  }
		  .carousel-inner > .item > .article-container > *{
		  	max-width: 100%; 
		  }
	  	</style>
  	</head>
		<button id="back-to-index" type="button" class="btn btn-default" aria-label="Left Align">
	  		<a href="index.php">
	  			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	  		</a>
		</button>

	<div id="articleCarousel" class="carousel slide" data-ride="carousel" data-interval="false"  style="height: 100%;">

		    <?php include('partials/article-content.php'); ?>

		</div>
		
<?php include('partials/footer.php'); ?>


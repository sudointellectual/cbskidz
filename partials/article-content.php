<?php 

$article_name = $_GET['article'];

$doc = new DOMDocument();
$doc->loadHTMLFile( "articles/".$article_name.".html");

$paragraphs = array(); 

$h3 = $doc->getElementsByTagName('h3'); 

$headline = $h3->item(0)->textContent; 

//$image = "http://placekitten.com/g/250/200"; 
$image = "images/articles/".$article_name.".png"; 

foreach($doc->getElementsByTagName('p') as $paragraph) {

  //echo $paragraph->textContent."<br/><br/><br/>"; // for text only
  array_push($paragraphs, $paragraph->textContent); 
} 

?>
 	<!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#articleCarousel" data-slide-to="0" class="active"></li>
	    <?php $counter = 0; 
	    	foreach($paragraphs as $p ){ 
	    		$counter += 1; 
	    ?>
	    <li data-target="#articleCarousel" data-slide-to=" <?php echo $counter; ?> "></li>
	    <?php } ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox"  style="height: 400px;">
		<div class = "item active">
			<h3> <?php echo $headline; ?> </h3>
			<div class = "article-container">
				<img src= <?php echo $image; ?> alt="" class="img-rounded"/>
			</div>
		</div>

	<?php foreach ($paragraphs as $p){
	?>
		<div class = "item">
			<div class = "article-container">
				<p> <?php echo $p; ?> </p>
			</div>
		</div>

	<?php }?>

		<div class = "item">
		<div class = "article-container">
			<div class="alert alert-success" role="alert"> <strong>You Did It!!!</strong> You've been awarded 50 Points. </div>
			<p>How much were you challenged by this article? </p>
			<div class="btn-group" role="group" aria-label="..."> 
				<button type="button" class="btn btn-default" aria-label="Left Align" style="margin:5px;">
					<a href ="index.php">
				  		<span class="glyphicon glyphicon glyphicon-bed" aria-hidden="true"></span>
				  		<p style="margin:0;">easy!</p>
				  	</a>
				</button>
				<button type="button" class="btn btn-default" aria-label="Left Align" style="margin:5px;">					<a href ="index.php">

				  <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
  				  <p style="margin:0;"> just right!</p>
  				  </a>
				</button>
				<button type="button" class="btn btn-default" aria-label="Left Align" style="margin:5px;">	<a href ="index.php">
					  <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
	  				  <p style="margin:0;"> hard!</p>
  				  </a>
				</button>
			</div>
		</div>
	</div>

		  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#articleCarousel" role="button" data-slide="prev" style="background-image: none;">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#articleCarousel" role="button" data-slide="next" style="background-image: none;">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>


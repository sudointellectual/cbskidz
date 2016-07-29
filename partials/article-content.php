<?php 

$doc = new DOMDocument();
$doc->loadHTMLFile("science-article.html");

$paragraphs = array(); 

$h3 = $doc->getElementsByTagName('h3'); 

$headline = $h3->item(0)->textContent; 

$image = "http://placekitten.com/g/250/200"; 

foreach($doc->getElementsByTagName('p') as $paragraph) {

  //echo $paragraph->textContent."<br/><br/><br/>"; // for text only
  array_push($paragraphs, $paragraph->textContent); 
} 

?>
 	<!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <?php $counter = 0; 
	    	foreach($paragraphs as $p ){ 
	    		$counter += 1; 
	    ?>
	    <li data-target="#myCarousel" data-slide-to=" <?php echo $counter ?> "></li>
	    <?php } ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox"  style="height: 400px;">
		<div class = "item active">
		<h3> <?php echo $headline ?> </h3>
			<div class = "article-container">
				<img src= <?php echo $image ?> />
			</div>
		</div>

	<?php foreach ($paragraphs as $p){
	?>

		<div class = "item">
			<div class = "article-container">
				<p> <?php echo $p ?> </p>
			</div>
		</div>

	<?php }?>
	</div>

		  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>


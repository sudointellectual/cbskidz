<?php  

$topic = $_GET['topic'];
?>
<?php

$doc= new DOMDocument();
$doc->loadHTMLFile( "articles/".$topic."-1.html");

$link = "article.php?article=".$topic."-1"; 

$paragraphs = array(); 

$h3 = $doc->getElementsByTagName('h3'); 

$headline = $h3->item(0)->textContent; 

$image = "images/articles/".$topic."-1.png"; 

$counter = 0; 
$desc = ""; 
foreach($doc->getElementsByTagName('p') as $paragraph) {
	if ($counter == 0){ $desc = $paragraph->textContent; }
	$counter += 1; 

  // echo $paragraph->textContent."<br/><br/><br/>"; // for text only
  array_push($paragraphs, $paragraph->textContent); 

} 

?>

<?php include('partials/header.php'); ?>

<h3><?php echo $topic; ?></h3>

	<div id="recommendedCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#recommendedCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#recommendedCarousel" data-slide-to="1"></li>
			<li data-target="#recommendedCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href=<?php echo $link ?> >
				<img src=<?php echo $image?> alt="" class="img-rounded">
				<div class="carousel-caption">
					<h3><?php echo $headline; ?></h3>
					<p><?php echo $desc; ?></p>
				</div>
				</a>
			</div>
			<?php

				$doc= new DOMDocument();
				$doc->loadHTMLFile( "articles/".$topic."-2.html");
				$link = "article.php?article=".$topic."-2"; 

				$paragraphs = array(); 

				$h3 = $doc->getElementsByTagName('h3'); 

				$headline = $h3->item(0)->textContent; 

				$image = "images/articles/".$topic."-2.png"; 

				$counter = 0; 
				$desc = ""; 
				foreach($doc->getElementsByTagName('p') as $paragraph) {
					if ($counter == 0){ $desc = $paragraph->textContent; }
						$counter += 1; 


				  // echo $paragraph->textContent."<br/><br/><br/>"; // for text only
				  array_push($paragraphs, $paragraph->textContent); 

				} 

				?>
			<div class="item">
				<a href=<?php echo $link ?> >
					<img src=<?php echo $image?> alt="" class="img-rounded">
					<div class="carousel-caption">
						<h3><?php echo $headline; ?></h3>
						<p><?php echo $desc; ?></p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href=<?php echo $link ?> >
					<img src="images/articles/world-3.png" alt="" class="img-rounded">
					<div class="carousel-caption">
						<h3>Clinton-Kaine</h3>
						<p>A delegate cheers as New York Governor Andrew Cuomo speaks on the final night of the DNC.</p>
					</div>
				</a>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#recommendedCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#recommendedCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<?php include('partials/footer.php'); ?>

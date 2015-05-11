<?php get_header();
/*
Template Name: Categories Page
*/
?>

<div class="row">
 	<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">

 		<h3><?php the_title(); ?></h3>

 	</div>
</div>

<div class="space"><p>.</p></div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



  	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>People</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/people">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Nature</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/nature">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Animals</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/animals">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Buildings</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/buildings">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Travel</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/travel">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Urban</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/urban">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Auto</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/auto">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2>Objects</h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="<?php bloginfo('url'); ?>/objects">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
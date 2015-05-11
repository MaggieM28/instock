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


	<?php $thumb_posts = new WP_Query(['post_type' => 'thumb',
									     'orderby' => 'rand'
								]); ?>

	<?php if ($thumb_posts->have_posts()) : while ($thumb_posts->have_posts()) : $thumb_posts->the_post(); ?>


  	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
		<div class="well cat-thumbs">
			<figure class="effect-ming">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature">
			<figcaption>
					<h2><?php the_title(); ?></h2>
					<p>She's into crochet. Like really into it.</p>
					<a href="#">View more</a>
			</figcaption>
			<figure class="effect-ming">
		</div>
	</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
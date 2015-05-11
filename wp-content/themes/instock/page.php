<?php get_header(); ?>



<div class="row">
 	<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">

 		<h3><?php the_title(); ?></h3>

 	</div>
</div>

<div class="space"><p>.</p></div>

<?php if (is_page('nature') || is_page('animals') || is_page('buildings') || is_page('people') || is_page('urban')) : while (have_posts()) : the_post();?>
		<div id="page-info"><?php the_content(); ?></div>
	<?php endwhile; endif; ?>
	<?php				

		if( is_page('nature') || is_page('animals') || is_page('buildings') || is_page('people') ){

			$page_name = $wp_query->post->post_name;
			query_posts('category_name='. $page_name);

		while (have_posts()) : the_post(); ?>

			<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 cat-thumb-container grid">
				<div class="well cat-thumbs">
					<figure class="effect-ming">
					<img class="img-responsive" src="https://placeimg.com/200/200/nature">
					<figcaption>
							<h2><?php the_title(); ?></h2>
							<a href="#" data-toggle="modal" data-target="#myModal">View more</a>
					</figcaption>
					<figure class="effect-ming">
				</div>
			</div>


	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <img class="col-xs-12" id="myModalLabel" src="https://placeimg.com/800/600/nature">
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-primary view-it">View Photo Details</button>
	      	</div>
	    </div>
	  </div>
	</div>

			
		<?php endwhile; }
	?>






<?php get_footer(); ?>